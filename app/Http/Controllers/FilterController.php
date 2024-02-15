<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function filterProducts(Request $request){

        $pathName = $request->path_name;
        $pageTitle = 'Shop';

        // main query
        $query = DB::table('products')
                ->leftJoin('medicine_types', 'products.medicine_type_id', 'medicine_types.id')
                ->leftJoin('flags', 'products.flag_id', 'flags.id')
                ->select('products.id', 'products.slug', 'products.price', 'products.discount_price', 'products.name', 'products.stock', 'products.strength', 'products.image', 'medicine_types.name as medicine_type', 'flags.name as flag_name')
                ->where('products.status', 1);


        // ========== filter parameters query start ============
        $category_slug = $request->category_slug;
        $disease_slug = $request->disease_slug;
        $flag_slug = $request->flag_slug;
        $otc_status = $request->otc_status;

        $per_page = $request->per_page;
        $sort_by = $request->sort_by;
        $min_price = $request->min_price;
        $max_price = $request->max_price;


        if($category_slug){
            $categoryInfo = DB::table('categories')->where('slug', $category_slug)->first();
            if($categoryInfo){
                $query->where('products.category_id', $categoryInfo->id);
                $pageTitle = $categoryInfo->name;
            }
        }

        if($disease_slug){
            $diseaseInfo = DB::table('diseases')->where('slug', $disease_slug)->first();
            if($diseaseInfo){
                $query->where('products.disease_id', $diseaseInfo->id);
                $pageTitle = $diseaseInfo->name;
            }
        }

        if($flag_slug){
            $flagInfo = DB::table('flags')->where('slug', $flag_slug)->first();
            if($flagInfo){
                $query->where('products.flag_id', $flagInfo->id);
                $pageTitle = $flagInfo->name;
            }
        }

        if($otc_status && $otc_status > 0){
            if($otc_status){
                $query->where('products.is_otc', 1);
            }
        }

        if($sort_by && $sort_by > 0){
            if($sort_by == 1){
                $query->orderBy('products.discount_price', 'asc')->orderBy('products.price', 'asc');
            }
            if($sort_by == 2){
                $query->orderBy('products.discount_price', 'desc')->orderBy('products.price', 'desc');
            }
        } else {
            $query->orderBy('products.id', 'desc');
        }

        if($min_price && $min_price > 0){
            $query->where('products.discount_price', '>', $min_price)->where('products.price', '>', $min_price);
        }
        if($max_price && $max_price > 0){
            $query->where('products.discount_price', '<', $max_price)->where('products.price', '<', $max_price);
        }
        // ========== filter parameters query end ============


        // fetch data with pagination
        $products = $query->paginate($per_page);
        $products->withPath($pathName);

        // return response
        $showingResults = "Showing ".(($products->currentpage()-1)*$products->perpage()+1)." - ".$products->currentpage()*$products->perpage()." of ".$products->total()." results";
        $returnHTML = view('single_product.product', compact('products', 'pageTitle', 'category_slug', 'disease_slug', 'flag_slug', 'otc_status'))->render();

        return response()->json(['rendered_view' => $returnHTML, 'showingResults' => $showingResults]);

    }
}
