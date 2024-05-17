<?php

namespace App\Http\Controllers\DataServices;
use App\Models\CompanyProfile;
use App\Models\JobCircularInfo;
use App\Models\JobTitleInfo;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CompanyDataService
{
    /*
     ==========================================================================
     ============================= Company Profile ============================
     ==========================================================================
    */

    public function getCompanyProfileInformation()
    {
        return $all = CompanyProfile::all();
    }

    public function findCompanryProfile()
    {
        $profile = CompanyProfile::where('comp_id', 1)->first();
        // dd($profile);
        if ($profile != null) {
            return $profile;
        }
        return $profile;
    }

    public function insertCompanyInformation($req)
    {
        // dd($req->all());
        $companyData = CompanyProfile::where('comp_id', 1)->first();
        $companydataExist = new CompanyProfile;

        if ($companyData == null){
             $companydataExist->comp_name_en = $req->comp_name_en;
             $companydataExist->comp_name_arb = $req->comp_name_arb;
             $companydataExist->comp_email1 = $req->comp_email1;
             $companydataExist->comp_email2 = $req->comp_email2;
             $companydataExist->comp_phone1 = $req->comp_phone1;
             $companydataExist->comp_phone2 = $req->comp_phone2;
             $companydataExist->comp_mobile1 = $req->comp_mobile1;
             $companydataExist->comp_mobile2 = $req->comp_mobile2;
             $companydataExist->comp_support_number = $req->comp_support_number;
            //  $companydataExist->comp_contact_address = $req->comp_contact_address;
             $companydataExist->facebook_url = $req->facebook_url;
             $companydataExist->linkedin_url = $req->linkedin_url;
             $companydataExist->twitter_url = $req->twitter_url;
             $companydataExist->whatsapp_num = $req->whatsapp_num;
             $companydataExist->comp_hotline_number = $req->comp_hotline_number;
             $companydataExist->comp_address = $req->comp_address;
             $companydataExist->comp_mission = $req->comp_mission;
             $companydataExist->comp_vission = $req->comp_vission;
             $companydataExist->created_at = Carbon::now();
             return $companydataExist->save();
        }

        else {
            return CompanyProfile::where('comp_id', 1)->update([
                'comp_name_en' => $req->comp_name_en,
                'comp_name_arb' => $req->comp_name_arb,
                'comp_address' => $req->comp_address,
                'comp_email1' => $req->comp_email1,
                'comp_email2' => $req->comp_email2,
                'comp_phone1' => $req->comp_phone1,
                'comp_phone2' => $req->comp_phone2,
                'comp_mobile1' => $req->comp_mobile1,
                'comp_mobile2' => $req->comp_mobile2,
                'facebook_url' => $req->facebook_url,
                'linkedin_url' => $req->linkedin_url,
                'twitter_url' => $req->twitter_url,
                'whatsapp_num' => $req->whatsapp_num,
                'comp_support_number' => $req->comp_support_number,
                'comp_hotline_number' => $req->comp_hotline_number,
                'comp_mission' => $req->comp_mission,
                'comp_vission' => $req->comp_vission,
                // 'comp_contact_address' => $req->comp_contact_address,
                'updated_at' => Carbon::now(),
            ]);
        }
    }

    public function CompanyProfileDescriptionUpdate($description){
        // dd('Calling from method');
        $companyData = CompanyProfile::where('comp_id', 1)->first();
        $companydataExist = new CompanyProfile;

        if ($companyData == null) {
            $companydataExist->comp_description = $description;
        } else {
            return CompanyProfile::where('comp_id', 1)->update([
                'comp_description' => $description,
                'updated_at' => Carbon::now(),
            ]);
        }
    }

    // All Available jobs
    public function GetAllAvailableJobs(){
        return JobTitleInfo::where('status', 1)->get();
    }

    public function GetAllCurrentJobCircular(){
        return JobCircularInfo::where('status', 1)->get();
    }

    public function NewJobCircularInsert($req){
        return JobCircularInfo::insert([
            'jobtitleId' => $req->jobtitle_id,
            'openingDate' => $req->opening_date,
            'closingDate' => $req->closing_date,
            'noOfVacancy' => $req->vacancy_no,
            // 'approvedById' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
    }

    public function JobCircularById($id){
        return JobCircularInfo::where('jobCircularId', $id)->first();
    }

    public function JobCircularInfoUpdate($req){
        // dd($req->all());
        return JobCircularInfo::where('jobCircularId', $req->jobCircular_id)->update([
            'jobtitleId' => $req->jobtitle_id,
            'openingDate' => $req->opening_date,
            'closingDate' => $req->closing_date,
            'noOfVacancy' => $req->vacancy_no,
            // 'approvedById' => Auth::user()->id,
            'updated_at' => Carbon::now(),
        ]);
    }

    public function JobCircularInfoDelete($id){
        return JobCircularInfo::where('jobCircularId', $id)->delete();
    }

}
