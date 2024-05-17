<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataServices\CompanyDataService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyProfileController extends Controller
{



  public function getAll(){
    return $all =  (new CompanyDataService())->getCompanyProfileInformation();
    //CompanyProfile::all();
  }

  public function findCompanry(){
    return $profile = (new CompanyDataService())->findCompanryProfile();
  }

  public function CompanyProfileInfoPage(){

    // dd('Hello');
    $comDSObj = new CompanyDataService();
   // $cur = $comDSObj->getAvailableCurrency();
    $profile =  $comDSObj->findCompanryProfile();
    // dd('ok');
    // dd($profile);
    return view('admin.company-profile.profile', compact('profile'));
  }

  public function CompanyProfileUpdateRequest(Request $req){
    // dd($req->all());
    $update = (new CompanyDataService())->insertCompanyInformation($req);

    // dd("After Check and Data update");

    if ($update) {
      Session::flash('success', 'Company Data updated successfully');
      return Redirect()->back();
    } else {
      Session::flash('error', 'value');
      return Redirect()->back();
    }
  }

  public function CompanyProfileDescriptionUpdate(){
    $comDSObj = new CompanyDataService();
   // $cur = $comDSObj->getAvailableCurrency();
    $profile =  $comDSObj->findCompanryProfile();
    return view('admin.company-profile.description-update', compact('profile'));
  }

  public function CompanyProfileDescriptionUpdateRequest(Request $req){
    // dd($req->all());
    $this->validate($req, [
        'profile_descp' => 'required',
    ], [
        'profile_descp.required' => 'Please Enter Your Company Description Here....'
    ]);

    $update = (new CompanyDataService())->CompanyProfileDescriptionUpdate($req->profile_descp);

    if ($update) {
      Session::flash('success', 'value');
      return Redirect()->back();
    } else {
      Session::flash('error', 'value');
      return Redirect()->back();
    }
  }

    // Job Circular Start
    public function JobCircularAddUI(){
        $jobs = (new CompanyDataService())->GetAllAvailableJobs();
        $jobCircular = (new CompanyDataService())->GetAllCurrentJobCircular();
        // dd($jobCircular);
        return view('admin.job-circular.index', compact('jobs', 'jobCircular'));
    }

    public function JobCircularAddRequest(Request $req){
        // dd($req->all());
        $insert = (new CompanyDataService())->NewJobCircularInsert($req);

        if ($insert) {
          Session::flash('success', 'value');
          return Redirect()->back();
        } else {
          Session::flash('error', 'value');
          return Redirect()->back();
        }
    }

    public function JobCircularEditUi($id){
        // dd('Request for edit');
        $jobs = (new CompanyDataService())->GetAllAvailableJobs();
        $circular = (new CompanyDataService())->JobCircularById($id);
        return view('admin.job-circular.edit', compact('jobs', 'circular'));
    }

    public function JobCircularUpdateRequest(Request $req){
        // dd($req->all());
        $update = (new CompanyDataService())->JobCircularInfoUpdate($req);

        if ($update) {
          Session::flash('success_update', 'value');
          return redirect()->route('job-circular-add-ui');
        } else {
          Session::flash('error', 'value');
          return Redirect()->back();
        }
    }

    public function JobCircularDeleteRequest($id){
        $deleteCircular = (new CompanyDataService())->JobCircularInfoDelete($id);

        if ($deleteCircular) {
          Session::flash('success_soft', 'value');
          return redirect()->route('job-circular-add-ui');
        } else {
          Session::flash('error', 'value');
          return Redirect()->back();
        }
    }

    // Job Circular End

}
