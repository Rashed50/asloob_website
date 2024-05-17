<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\DataServices\JobApplicantDataService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class JobApplicantInfoController extends Controller
{
    public function insertNewJobApplicantInformation(Request $request){
        // dd($request->all());

        $insert = (new JobApplicantDataService())->saveNewJobApplicantInformaiton(
            $request->applicant_name,
            $request->email,
            $request->phone,
            $request->job_title,
            $request->experiance_year,
            $request->myfile,
        );

        if($insert){
            return redirect()->back()->with('message','Successfully Completed your Job Application'); //Toastr alert
        }else {
            Session::flash('error', 'Application Submission Failed. Please try Again');
            return redirect()->back();
        }


    //    $insertId =  (new JobApplicantDataService())->saveNewJobApplicantInformaiton(
    //         $request->applicant_name,
    //         $request->job_title ?? "New one",
    //         $request->email,
    //         $request->phone,
    //         $request->cv_path ?? "New CV",
    //         $request->experiance_year ?? 0
    //     );

    //       if ($insertId) {
    //         return "Successfully Completed your Job Application";
    //       } else {
    //         return "Application Submission Failed. Please try Again";
    //       }
    }


    // ######################## Admin Panel Database Operations ########################

    public function AllJobApplicantListUi(){
        $applicants = (new JobApplicantDataService())->GetAllApplicants();

        return view('admin.job-applicant.all', compact('applicants'));
    }

    public function JobApplicantCVViewRequest($id){
        $singleApplicant = (new JobApplicantDataService())->GetSingleApplicantInformations($id);
        return view('admin.job-applicant.info', compact('singleApplicant'));
    }

    public function JobApplicantCVDownloadRequest($id){
        // dd("This is for download request");

        $download = (new JobApplicantDataService())->SingleApplicantCVDownloadRequest($id);

        dd("after downlaod");
    }




}
