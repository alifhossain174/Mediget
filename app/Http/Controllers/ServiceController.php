<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use CURLFile;

class ServiceController extends Controller
{
    public function nursingService(){
        $services = DB::table('nursing_services')->orderBy('name', 'asc')->get();
        return view('nursing_service', compact('services'));
    }
    public function submitNursingRequest(Request $request){

        $id = DB::table('nursing_service_requests')->insertGetId([
            'service_id' => $request->service_id,
            'user_id' => Auth::user()->id,
            'service_date_time' => $request->service_date_time,
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'remarks' => $request->remarks,
            'slug' => str::random(5) . time(),
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        $serialNo = $id.env("APP_NAME"). str_pad(DB::table('nursing_service_requests')->count()+1, 5, "0", STR_PAD_LEFT);

        DB::table('nursing_service_requests')->where('id', $id)->update([
            'serial_no' => $serialNo
        ]);

        Toastr::success('Request Submitted Successfully', 'Success');
        return back();
    }
    public function myNursingServices(){

        $data = DB::table('nursing_service_requests')
                    ->leftJoin('nursing_services', 'nursing_service_requests.service_id', 'nursing_services.id')
                    ->select('nursing_service_requests.*', 'nursing_services.name as service_name', 'nursing_services.price')
                    ->where('nursing_service_requests.user_id', Auth::user()->id)
                    ->orderBy('nursing_service_requests.id', 'desc')
                    ->paginate(10);

        return view('dashboard.my_nursing_services', compact('data'));
    }
    public function removeNursingRequest($slug){
        DB::table('nursing_service_requests')->where('slug', $slug)->where('user_id', Auth::user()->id)->delete();
        Toastr::error('Request Deleted Successfully', 'Deleted');
        return back();
    }
    public function editNursingRequest($slug){
        $services = DB::table('nursing_services')->orderBy('name', 'asc')->get();
        $data = DB::table('nursing_service_requests')->where('slug', $slug)->where('user_id', Auth::user()->id)->first();
        return view('edit_nursing_service', compact('data', 'services'));
    }
    public function updateNursingRequest(Request $request){
        DB::table('nursing_service_requests')->where('slug', $request->request_slug)->update([
            'service_id' => $request->service_id,
            'service_date_time' => $request->service_date_time,
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'remarks' => $request->remarks,
            'updated_at' => Carbon::now()
        ]);
        Toastr::success('Request Updated Successfully', 'Updated');
        return redirect('my/nursing/services');
    }
}
