<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function otc(){
        return view('otc');
    }

    public function categoryWiseProducts(){
        return view('category');
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
}
