<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $featuedCategories = DB::table('categories')->where([['status', 1], ['featured', 1], ['show_on_navbar', 0]])->orderBy('serial', 'asc')->get();
        $flags = DB::table('flags')->where('status', 1)->orderBy('serial', 'asc')->get();
        $diseases = DB::table('diseases')->where('status', 1)->orderBy('serial', 'asc')->get();
        $sliders = DB::table('banners')->where('type', 1)->orderBy('serial', 'asc')->get();
        $services = DB::table('services')->where('status', 1)->whereIn('id', [1,2,3,4,5])->get();
        $prescriptionService = DB::table('services')->where('status', 1)->where('id', 6)->first();
        $abroadMedicineService = DB::table('services')->where('id', 8)->first();
        return view('index', compact('featuedCategories', 'flags', 'diseases', 'sliders', 'services', 'prescriptionService', 'abroadMedicineService'));
    }

    public function otc(){

        $data = DB::table('products')
                ->leftJoin('diseases', 'products.disease_id', 'diseases.id')
                ->select('diseases.*')
                ->where('is_otc', 1)
                ->orderBy('diseases.serial', 'asc')
                ->groupBy('products.disease_id')
                ->paginate(12);

        return view('otc', compact('data'));
    }

    public function shop(Request $request){

        $query = DB::table('products')
                ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                ->leftJoin('medicine_generics', 'products.generic_id', 'medicine_generics.id')
                ->leftJoin('flags', 'products.flag_id', 'flags.id')
                ->select('products.id', 'products.slug', 'products.price', 'products.discount_price', 'products.name', 'products.stock', 'products.strength', 'products.image', 'medicine_types.name as medicine_type', 'flags.name as flag_name')
                ->where('products.status', 1);

        $parameters = '';
        $pageTitle = env('APP_NAME');


        // category filter start
        $category_slug = isset($request->category) ? $request->category : '';
        if($category_slug){
            $categoryInfo = DB::table('categories')->where('slug', $category_slug)->first();
            if($categoryInfo){
                $pageTitle = $categoryInfo->name;
                $query->where('products.category_id', $categoryInfo->id);
            }
            $parameters .= '?category=' . $category_slug;
        }
        // category filter end


        // diseases filter start
        $disease_slug = isset($request->disease) ? $request->disease : '';
        $otc_status = isset($request->otc) ? $request->otc : '';
        if($disease_slug){
            $diseaseInfo = DB::table('diseases')->where('slug', $disease_slug)->first();
            if($diseaseInfo){
                $pageTitle = $diseaseInfo->name;
                $query->where('products.disease_id', $diseaseInfo->id);
            }
            $parameters .= '?disease=' . $disease_slug;

            if($otc_status){
                $query->where('products.is_otc', 1);
                $parameters .= '&otc=1';
            }
        }
        // diseases filter end


        // flag filter start
        $flag_slug = isset($request->flag) ? $request->flag : '';
        if($flag_slug){
            $flagInfo = DB::table('flags')->where('slug', $flag_slug)->first();
            if($flagInfo){
                $pageTitle = $flagInfo->name;
                $query->where('products.flag_id', $flagInfo->id);
            }
            $parameters .= '?flag=' . $flag_slug;
        }
        // flag filter end


        // search keyword
        $keyword = '';
        if(isset($request->keyword) && $request->keyword != ''){
            $keyword = $request->keyword;
            $pageTitle = "Search Results for: '".$keyword."'";
            $query->where('products.name', 'LIKE', '%'.$keyword.'%')->orWhere('medicine_generics.name', 'LIKE', '%'.$keyword.'%');
            $parameters .= '?keyword='.$request->keyword;
        }


        $sort_by = $request->sort_by;
        if($sort_by && $sort_by > 0){
            if($sort_by == 1){
                $query->orderBy('products.discount_price', 'asc')->orderBy('products.price', 'asc');
                $parameters .= '&sort_by=1';
            }
            if($sort_by == 2){
                $query->orderBy('products.discount_price', 'desc')->orderBy('products.price', 'desc');
                $parameters .= '&sort_by=2';
            }
        } else {
            $query->orderBy('products.id', 'desc');
        }


        $min_price = $request->min_price;
        $max_price = $request->max_price;
        if($min_price && $min_price > 0){
            $query->where('products.discount_price', '>', $min_price)->where('products.price', '>', $min_price);
            $parameters .= '&min_price='.$min_price;
        }
        if($max_price && $max_price > 0){
            $query->where('products.discount_price', '<', $max_price)->where('products.price', '<', $max_price);
            $parameters .= '&max_price='.$max_price;
        }

        $per_page = 20;
        if(isset($request->per_page) && $request->per_page > 0){
            $per_page = $request->per_page;
            $parameters .= '&per_page='.$per_page;
        }

        $products = $query->paginate($per_page);
        $products->withPath('/shop'.$parameters);

        return view('shop.shop', compact('products', 'pageTitle', 'category_slug', 'disease_slug', 'flag_slug', 'otc_status', 'per_page', 'sort_by', 'min_price', 'max_price', 'keyword'));
    }

    public function searchForProducts(Request $request){
        return redirect('shop?keyword='.$request->search_keyword);
    }

    public function productDetails($slug){

        $product = DB::table('products')
                    ->leftJoin('categories', 'products.category_id', 'categories.id')
                    ->leftJoin('medicine_generics', 'products.generic_id', 'medicine_generics.id')
                    ->leftJoin('diseases', 'products.disease_id', 'diseases.id')
                    ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                    ->leftJoin('brands', 'products.brand_id', 'brands.id')
                    ->select('products.*', 'categories.name as category_name', 'categories.slug as category_slug', 'medicine_generics.name as generic_name', 'diseases.name as disease_name', 'medicine_types.name as medicine_type_name', 'brands.name as brand_name', 'brands.logo as brand_logo')
                    ->where('products.slug', $slug)
                    ->first();

        $mayLikedProducts = DB::table('products')
                        ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                        ->leftJoin('flags', 'products.flag_id', 'flags.id')
                        ->select('products.id', 'products.slug', 'products.price', 'products.discount_price', 'products.name', 'products.stock', 'products.strength', 'products.image', 'medicine_types.name as medicine_type', 'flags.name as flag_name')
                        ->where('products.generic_id', $product->generic_id)
                        ->inRandomOrder()
                        ->skip(0)
                        ->limit(15)
                        ->get();

        $productReviews = DB::table('product_reviews')
            ->leftJoin('users', 'product_reviews.user_id', 'users.id')
            ->select('product_reviews.rating', 'product_reviews.review', 'product_reviews.reply', 'product_reviews.created_at', 'product_reviews.status', 'users.name as username', 'users.image as user_image')
            ->where('product_reviews.product_id', $product->id)
            ->where('product_reviews.status', 1)
            ->orderBy('product_reviews.id', 'desc')
            ->paginate(10);

        $totalReviews = $productReviews->total();
        $totalRating = DB::table('product_reviews')->where('product_reviews.product_id', $product->id)->where('product_reviews.status', 1)->sum('rating');
        $averageRating = $totalReviews > 0 ? $totalRating/$totalReviews : 0;

        $productMultipleImages = DB::table('product_images')->select('image')->where('product_id', $product->id)->get();
        $variants = DB::table('product_variants')
                    ->leftJoin('units', 'product_variants.unit_id', 'units.id')
                    ->select('product_variants.*', 'units.name as unit_name')
                    ->where('product_variants.product_id', $product->id)
                    ->get();

        return view('product_details.details', compact('product', 'variants', 'productMultipleImages', 'mayLikedProducts', 'productReviews', 'totalReviews', 'totalRating', 'averageRating'));
    }

    public function about(){
        $data = DB::table('about_us')->where('id', 1)->first();
        return view('about', compact('data'));
    }

    public function faq(){
        $data = DB::table('faqs')->orderBy('id', 'desc')->get();
        return view('faq', compact('data'));
    }

    public function contact(){
        $contactInfo = DB::table('general_infos')->select('contact', 'email', 'address', 'facebook', 'twitter', 'instagram', 'linkedin', 'messenger', 'youtube', 'whatsapp', 'telegram', 'tiktok', 'pinterest', 'viber')->first();
        $mapInfo = DB::table('general_infos')->select('google_map_link')->where('id', 1)->first();
        return view('contact', compact('contactInfo', 'mapInfo'));
    }

    public function submitContactRequest(Request $request){

        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
        ]);

        DB::table('contact_requests')->insert([
            'name' => $request->firstname." ".$request->lastname,
            'email' => $request->email,
            'phone' => $request->number,
            'message' => $request->message,
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        Toastr::success('Request is Submitted', 'Success');
        return back();
    }

    public function doctors(){
        return view('doctors');
    }

    public function doctorDetails(){
        return view('doctor_details');
    }

    public function subscribeForNewsletter(Request $request){

        $data = DB::table('subscribed_users')->where('email', trim($request->email))->first();
        if($data){
            Toastr::warning('Already Subscribed', 'Success');
            return back();
        } else {
            DB::table('subscribed_users')->insert([
                'email' => $request->email,
                'created_at' => Carbon::now()
            ]);
            Toastr::success('Successfully Subscribed', 'Success');
            return back();
        }
    }

    public function sendAppLink(Request $request){

        if($request->phone == ''){
            Toastr::error('Phone No is Required', 'Success');
            return back();
        }

        // Remove any non-numeric characters from the phone number
        $phoneNumber = preg_replace('/[^0-9]/', '', $request->phone);

        // Check if the phone number starts with 88 (country code for Bangladesh) and has a total length of 11 digits
        if (preg_match('/^[0-9]{11}$/', $phoneNumber)) {

            // $smsGateway = DB::table('sms_gateways')->where('status', 1)->first();
            // $appSection = DB::table('mobile_apps')->where('id', 1)->first();

            // $msg = '';
            // if($appSection->play_store_link){
            //     $msg .= "Play Store: ". $appSection->play_store_link." ";
            // }
            // if($appSection->app_store_link){
            //     $msg .= "Apple Store: ". $appSection->app_store_link;
            // }

            // if($smsGateway && $smsGateway->provider_name == 'Reve'){

            //     $response = Http::get($smsGateway->api_endpoint, [
            //         'apikey' => $smsGateway->api_key,
            //         'secretkey' => $smsGateway->secret_key,
            //         "callerID" => $smsGateway->sender_id,
            //         "toUser" => $request->phone,
            //         "messageContent" => $msg,
            //     ]);

            //     if($response->status() != 200){
            //         Toastr::error('Something Went Wrong', 'Failed to send SMS');
            //         return back();
            //     }

            // } elseif($smsGateway && $smsGateway->provider_name == 'ElitBuzz'){

            //     $response = Http::get($smsGateway->api_endpoint, [
            //         'api_key' => $smsGateway->api_key,
            //         "type" => "text",
            //         "contacts" => $request->phone, //“88017xxxxxxxx,88018xxxxxxxx”
            //         "senderid" => $smsGateway->sender_id,
            //         "msg" => $msg
            //     ]);

            //     if($response->status() != 200){
            //         Toastr::error('Something Went Wrong', 'Failed to send SMS');
            //         return back();
            //     }

            // } else {
            //     Toastr::error('No SMS Gateway is Active Now', 'Failed to send SMS');
            //     return back();
            // }

            Toastr::error('No SMS Gateway is Active Now', 'Failed to send SMS');
            return back();

        } else {
            Toastr::error('Phone No is not valid', 'Invalid Phone No');
            return back();
        }

    }

    // policy related functions
    public function privacyPolicy(){
        $pageTitle = "Privacy Policy";
        $pageUrl = url('/privacy/policy');
        $policy = DB::table('terms_and_policies')->select('privacy_policy as policy')->first();
        return view('policy', compact('pageTitle', 'pageUrl', 'policy'));
    }
    public function termsOfServices(){
        $pageTitle = "Terms of Services";
        $pageUrl = url('/terms/of/services');
        $policy = DB::table('terms_and_policies')->select('terms as policy')->first();
        return view('policy', compact('pageTitle', 'pageUrl', 'policy'));
    }
    public function refundPolicy(){
        $pageTitle = "Refund Policy";
        $pageUrl = url('/refund/policy');
        $policy = DB::table('terms_and_policies')->select('return_policy as policy')->first();
        return view('policy', compact('pageTitle', 'pageUrl', 'policy'));
    }
    public function shippingPolicy(){
        $pageTitle = "Shipping Policy";
        $pageUrl = url('/shipping/policy');
        $policy = DB::table('terms_and_policies')->select('shipping_policy as policy')->first();
        return view('policy', compact('pageTitle', 'pageUrl', 'policy'));
    }
}
