<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $featuedCategories = DB::table('categories')->where([['status', 1], ['featured', 1], ['show_on_navbar', 0]])->orderBy('serial', 'asc')->get();
        $flags = DB::table('flags')->where('status', 1)->orderBy('serial', 'asc')->get();
        $diseases = DB::table('diseases')->where('status', 1)->orderBy('serial', 'asc')->get();
        $sliders = DB::table('banners')->where('type', 1)->orderBy('serial', 'asc')->get();
        return view('index', compact('featuedCategories', 'flags', 'diseases', 'sliders'));
    }

    public function otc(){
        return view('otc');
    }

    public function shop(Request $request){

        $query = DB::table('products')
                ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                ->leftJoin('flags', 'products.flag_id', 'flags.id')
                ->select('products.id', 'products.slug', 'products.price', 'products.discount_price', 'products.name', 'products.stock', 'products.strength', 'products.image', 'medicine_types.name as medicine_type', 'flags.name as flag_name')
                ->orderBy('id', 'desc');

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
        if($disease_slug){
            $diseaseInfo = DB::table('diseases')->where('slug', $disease_slug)->first();
            if($diseaseInfo){
                $pageTitle = $diseaseInfo->name;
                $query->where('products.disease_id', $diseaseInfo->id);
            }
            $parameters .= '?disease=' . $disease_slug;
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


        $products = $query->paginate(16);
        $products->withPath('/shop'.$parameters);

        return view('shop.shop', compact('products', 'pageTitle'));
    }

    public function nursingService(){
        return view('nursing_service');
    }

    public function doctors(){
        return view('doctors');
    }

    public function doctorDetails(){
        return view('doctor_details');
    }

    public function uploadPrescription(){
        return view('upload_prescription');
    }

    public function productDetails(){
        return view('product_details');
    }

    public function requestMedicine(){
        return view('request_medicine');
    }
}
