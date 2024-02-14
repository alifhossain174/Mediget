<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function filterProducts(Request $request){


        // main query
        $query = DB::table('products')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->leftJoin('subcategories', 'products.subcategory_id', '=', 'subcategories.id')
            ->leftJoin('flags', 'products.flag_id', 'flags.id')
            ->select('products.image', 'products.name', 'price', 'discount_price', 'products.id', 'products.slug', 'stock', 'has_variant', 'flags.name as flag_name', 'categories.name as category_name', 'subcategories.name as subcategory_name')
            ->where('products.status', 1);


        // ========== filter parameters query start ============
        $subcategoryId = $request->subcategory_id;
        $flagId = $request->flag_id;
        $brandId = $request->brand_id;
        $search_keyword = $request->search_keyword;
        $sort_by = $request->sort_by;
        $min_price = $request->min_price;
        $max_price = $request->max_price;
        $pathName = $request->path_name;
        $parameters = '';


        if($subcategoryId){
            $query->whereIn('products.subcategory_id', explode(",",$subcategoryId));
            $parameters .= '&subcategory_id=' . $subcategoryId;
        }
        if($flagId){
            $query->whereIn('products.flag_id', explode(",",$flagId));
            $parameters .= '&flag_id=' . $flagId;
        }
        if($brandId){
            $query->whereIn('products.brand_id', explode(",",$brandId));
            $parameters .= '&brand_id=' . $brandId;
        }
        if($search_keyword){
            $query->where('products.name', 'LIKE', '%'.$search_keyword.'%');
            $parameters .= '&search_keyword=' . $search_keyword;
        }

        if($sort_by && $sort_by > 0){
            if($sort_by == 1){
                $query->orderBy('products.id', 'desc');
            }
            if($sort_by == 2){
                $query->orderBy('products.discount_price', 'asc')->orderBy('products.price', 'asc');
            }
            if($sort_by == 3){
                $query->orderBy('products.discount_price', 'desc')->orderBy('products.price', 'desc');
            }
            $parameters .= '&sort_by=' . $sort_by;
        } else {
            $query->orderBy('products.id', 'desc');
        }

        if($min_price && $min_price > 0){
            $query->where('products.discount_price', '>', $min_price)->where('products.price', '>', $min_price);
            $parameters .= '&min_price=' . $min_price;
        }
        if($max_price && $max_price > 0){
            $query->where('products.discount_price', '<', $max_price)->where('products.price', '<', $max_price);
            $parameters .= '&max_price=' . $max_price;
        }
        // ========== filter parameters query end ============



        // fetch data with pagination
        $products = $query->paginate(12);
        $products->withPath($pathName.'?category='.$categoryId.$parameters);

        // return response
        $showingResults = "Showing ".(($products->currentpage()-1)*$products->perpage()+1)." - ".$products->currentpage()*$products->perpage()." of ".$products->total()." results";
        $returnHTML = view('shop.products', compact('products'))->render();
        return response()->json(['rendered_view' => $returnHTML, 'showingResults' => $showingResults]);

    }
}
