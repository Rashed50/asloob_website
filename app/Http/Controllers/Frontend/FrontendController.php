<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataServices\CompanyDataService;
use App\Http\Controllers\DataServices\ProjectInfoDataService;
use PDO;

class FrontendController extends Controller
{
    public function index(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        $allProjects = (new ProjectInfoDataService())->getAllProjectInformation();
        return view('frontend.index' ,compact('companyInfo', 'allProjects'));
    }

    public function about(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        // dd($companyInfo->comp_mission);
        return view('frontend.about' ,compact('companyInfo'));
    }

    public function service(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.service' ,compact('companyInfo'));
    }

    public function contact(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.contact',compact('companyInfo'));
    }

	public function career(){
        $jobs = (new CompanyDataService())->GetAllCurrentJobCircular();
        $companyInfo = (new CompanyDataService())->findCompanryProfile();

        return view('frontend.career' ,compact('companyInfo', 'jobs'));
    }

    public function completeProjects(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.complete_projects', compact('companyInfo'));
    }

    public function runningProjects(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.running_projects' ,compact('companyInfo'));
    }

    public function privacyPolicy(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.policy' ,compact('companyInfo'));
    }

    public function portfolioPage($id){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        $projectInfo = (new ProjectInfoDataService())->findAProjectInformation($id);
        $projWiseMulImg = (new ProjectInfoDataService())->GetProjectWiseMultiImg($id);

        $fdate = $projectInfo->starting_date;
        $tdate = $projectInfo->proj_deadline;
        $datetime1 = strtotime($fdate); // convert to timestamps
        $datetime2 = strtotime($tdate); // convert to timestamps
        $days = (int)(($datetime2 - $datetime1)/86400); // will give the difference in days , 86400 is the timestamp difference of a day

        return view('frontend.portfolio', compact('companyInfo', 'projectInfo', 'projWiseMulImg', 'days'));
    }

    public function dubaiOffice(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.dubaiOffice', compact('companyInfo'));
    }

    public function ourGallery(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
          return view('frontend.photo_gallary', compact('companyInfo'));
        
    }

    public function companyProfile(){
        $companyInfo = (new CompanyDataService())->findCompanryProfile();
        return view('frontend.company_profile', compact('companyInfo'));
    }

}
