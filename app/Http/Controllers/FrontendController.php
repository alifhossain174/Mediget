<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $featuedCategories = DB::table('categories')->where([['status', 1], ['featured', 1], ['show_on_navbar', 0]])->orderBy('serial', 'asc')->get();
        $flags = DB::table('flags')->where('status', 1)->orderBy('serial', 'asc')->get();
        $diseases = DB::table('diseases')->where('status', 1)->get();
        return view('index', compact('featuedCategories', 'flags', 'diseases'));
    }

    public function otc(){
        return view('otc');
    }

    public function categoryWiseProducts(){
        return view('category');
    }

    public function flagWiseProducts(){
        return view('flag_wise_products');
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

    public function diseaseWiseMedicine(){
        return view('disease_wise_medicine');
    }

    public function productDetails(){
        return view('product_details');
    }

    public function requestMedicine(){
        return view('request_medicine');
    }
}
