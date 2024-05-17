<?php

    namespace App\Http\Controllers\DataServices;

use App\Models\JobApplicantInfo;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class JobApplicantDataService{
    public function GetAllApplicants(){
        return JobApplicantInfo::get();
    }

    public function GetSingleApplicantInformations($id){
        return JobApplicantInfo::where('job_app_id', $id)->first();
    }

   public function saveNewJobApplicantInformaiton(
    $applicant_name,
    $email,
    $phone,
    $job_title,
    $experiance_year,
    $cv_path,
    ){

        $fileName = time().'.'.$cv_path->extension();
        $save = $cv_path->move(public_path('\uploads\cv'), $fileName);

        return JobApplicantInfo::insert([
            "applicant_name" => $applicant_name,
            "email" => $email,
            "phone" =>$phone,
            "job_title" => $job_title,
            "experiance_year" =>$experiance_year,
            "cv_path" =>$save,
        ]);

    //   return  JobApplicantInfo::insertGetId([
    //       "applicant_name" => $applicant_name,
    //       "job_title" => $job_title,
    //       "email" => $email,
    //       "phone" =>$phone,
    //       "cv_path" =>$cv_path,
    //       "experiance_year" =>$experiance_year
    //     ]);
   }

   public function SingleApplicantCVDownloadRequest($id){

    $cv = JobApplicantInfo::where('job_app_id', $id)->first();

    $download = $cv->cv_path;

    // dd($download);
    return response()->download($download);

   }


}
