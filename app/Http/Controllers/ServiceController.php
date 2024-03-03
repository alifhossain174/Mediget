<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use CURLFile;

class ServiceController extends Controller
{

    // nursing service related functions starts from here
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
        return redirect('my/nursing/services');
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


    // prescription service related functions starts from here
    public function uploadPrescription(){
        return view('upload_prescription');
    }
    public function submitMyPrescription(Request $request){

        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 600);

        $attachment = NULL;

        if ($request->hasFile('attachment')){
            $get_attachment = $request->file('attachment');
            $attachment_name = str::random(5) . time() . '.' . $get_attachment->getClientOriginalExtension();
            $location = public_path('prescriptions/');
            $get_attachment->move($location, $attachment_name);
            $attachment = "prescriptions/" . $attachment_name;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('ADMIN_URL').'/api/upload/prescription',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'attachment'=> new CURLFile(public_path($attachment))
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
        }

        $id = DB::table('prescriptions')->insertGetId([
            'user_id' => Auth::user()->id,
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'address' => $request->address,
            'attachment' => $attachment,
            'slug' => str::random(5) . time(),
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        $serialNo = $id.env("APP_NAME"). str_pad(DB::table('prescriptions')->count()+1, 5, "0", STR_PAD_LEFT);
        DB::table('prescriptions')->where('id', $id)->update([
            'serial_no' => $serialNo
        ]);

        Toastr::success('Prescription Uploaded Successfully', 'Success');
        return redirect('my/prescriptions');
    }
    public function myPrescriptions(){
        $data = DB::table('prescriptions')
                ->where('user_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->paginate(10);

        return view('dashboard.my_prescriptions', compact('data'));
    }
    public function removePrescription($slug){
        DB::table('prescriptions')->where('slug', $slug)->where('user_id', Auth::user()->id)->delete();
        Toastr::error('Prescription Deleted Successfully', 'Removed');
        return back();
    }
    public function editPrescription($slug){
        $data = DB::table('prescriptions')->where('slug', $slug)->where('user_id', Auth::user()->id)->first();
        return view('edit_prescription', compact('data'));
    }
    public function updatePrescription(Request $request){
        ini_set('memory_limit', '2048M');
        ini_set('max_execution_time', 600);

        $prescriptionInfo = DB::table('prescriptions')->where('slug', $request->prescription_slug)->where('user_id', Auth::user()->id)->first();
        $attachment = $prescriptionInfo->attachment;

        if ($request->hasFile('attachment')){
            $get_attachment = $request->file('attachment');
            $attachment_name = str::random(5) . time() . '.' . $get_attachment->getClientOriginalExtension();
            $location = public_path('prescriptions/');
            $get_attachment->move($location, $attachment_name);
            $attachment = "prescriptions/" . $attachment_name;

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => env('ADMIN_URL').'/api/upload/prescription',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array(
                    'attachment'=> new CURLFile(public_path($attachment))
                ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
        }

        DB::table('prescriptions')->where('slug', $request->prescription_slug)->update([
            'patient_name' => $request->patient_name,
            'patient_phone' => $request->patient_phone,
            'address' => $request->address,
            'attachment' => $attachment,
            'updated_at' => Carbon::now()
        ]);

        Toastr::success('Prescription Updated Successfully', 'Success');
        return redirect('my/prescriptions');
    }


    // medicine requests related functions here
    public function requestMedicine(){
        return view('request_medicine');
    }
    public function submitMedicineRequest(Request $request){

        $id = DB::table('medicine_requests')->insertGetId([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'slug' => str::random(5) . time(),
            'status' => 0,
            'created_at' => Carbon::now()
        ]);

        $index = 0;
        foreach($request->medicine_name as $medicine_name){
            DB::table('medicine_request_items')->insert([
                'medicine_request_id' => $id,
                'meicine_name' => $medicine_name,
                'qty' => isset($request->qty[$index]) ? $request->qty[$index] : 1,
                'slug' => str::random(5) . time(),
                'created_at' => Carbon::now()
            ]);
            $index++;
        }

        $serialNo = $id.env("APP_NAME"). str_pad(DB::table('prescriptions')->count()+1, 5, "0", STR_PAD_LEFT);
        DB::table('medicine_requests')->where('id', $id)->update([
            'serial_no' => $serialNo
        ]);

        Toastr::success('Medicine Request Sent Successfully', 'Success');
        return redirect('my/medicine/requests');
    }
    public function myMedicineRequests(){
        $data = DB::table('medicine_requests')
                ->where('user_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->paginate(10);

        return view('dashboard.my_medicine_requsts', compact('data'));
    }
    public function removeMedicineRequest($slug){
        $data = DB::table('medicine_requests')->where('slug', $slug)->first();
        DB::table('medicine_request_items')->where('medicine_request_id', $data->id)->delete();
        DB::table('medicine_requests')->where('slug', $slug)->delete();
        Toastr::error('Medicine Request Deleted Successfully', 'Removed');
        return back();
    }


    // doctor appointments related functions here
    public function doctorAppoinments(){

        $data = DB::table('doctor_visit_requests')
                ->leftJoin('doctors', 'doctor_visit_requests.doctor_id', 'doctors.id')
                ->select('doctor_visit_requests.*', 'doctors.name as doctor_name', 'doctors.degree', 'doctors.institution', 'doctors.visiting_charge')
                ->where('user_id', Auth::user()->id)
                ->orderBy('id', 'desc')
                ->paginate(10);

        return view('dashboard.doctor_appointments', compact('data'));
    }

    public function removeDoctorAppoinment($slug){
        DB::table('doctor_visit_requests')->where('slug', $slug)->delete();
        Toastr::error('Doctor Appointment had been Deleted', 'Removed');
        return back();
    }

    public function editDoctorAppoinment($slug){
        $appointmentInfo = DB::table('doctor_visit_requests')->where('slug', $slug)->first();
        $data = DB::table('doctors')->where('id', $appointmentInfo->doctor_id)->first();
        return view('edit_doctor_appointment', compact('data', 'appointmentInfo'));
    }

    public function updateDoctorAppoinment(Request $request){
        DB::table('doctor_visit_requests')->where('id', $request->appointment_id)->where('user_id', Auth::user()->id)->update([
            'name' => $request->name,
            'phone' => $request->phone,
            'age' => $request->age,
            'weight' => $request->weight,
            'visit_date_time' => $request->visit_date_time,
            'updated_at' => Carbon::now()
        ]);

        Toastr::success('Appointment is Updated Successfully', 'Success');
        return redirect('doctor/appoinments');
    }


}
