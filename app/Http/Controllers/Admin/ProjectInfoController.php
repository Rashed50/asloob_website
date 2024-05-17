<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataServices\ProjectInfoDataService;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;

class ProjectInfoController extends Controller
{
    public function companyProjectAddUI(){
        $all = (new ProjectInfoDataService())->getAllProjectInformation();
        // dd($all);
        return view('admin.project-info.index', compact('all'));
    }

    public function companyProjectInsertRequest(Request $req){
        // dd($req->all());

        /* insert data in database */
        if ($req->file('proj_main_thumb') != "") {

          $proj_main_thumb = $req->file('proj_main_thumb');
          $proj_main_thumb_name = 'Emp-profile-image-' . time() . '.' . $proj_main_thumb->getClientOriginalExtension();
          Image::make($proj_main_thumb)->resize(491, 359)->save('uploads/project/' . $proj_main_thumb_name);
          $uplodPath = 'uploads/project/' . $proj_main_thumb_name;

          $insert = (new ProjectInfoDataService())->insertNewProjectInformation(
            $req->proj_name,
            $req->starting_date,
            $req->address,
            $req->proj_code,
            $req->proj_budget,
            $req->proj_deadline,
            $req->proj_description,
            $uplodPath,
          );
        } else {

          $insert = (new ProjectInfoDataService())->insertNewProjectInformation(
            $req->proj_name,
            $req->starting_date,
            $req->address,
            $req->proj_code,
            $req->proj_budget,
            $req->proj_deadline,
            $req->proj_description,
            "",
          );
        }

        /* redirect back */
        if ($insert) {
          Session::flash('success', 'value');
          return redirect()->back();
        } else {
          Session::flash('error', 'value');
          return redirect()->back();
        }
    }

    public function companyProjectInfoEditUI($id){
        // dd('Hello');
        $edit = (new ProjectInfoDataService())->findAProjectInformation($id);
        return view('admin.project-info.edit', compact('edit'));
    }

    public function companyProjectInfoUpdateRequest(Request $req){
        // dd($req->all());
        /* insert data in database */
        $id = $req->id;
        $update = (new ProjectInfoDataService())->updateProjectInformation(
          $id,
          $req->proj_name,
          $req->starting_date,
          $req->address,
          $req->proj_code,
          $req->proj_budget,
          $req->proj_deadline,
          $req->proj_description ?? "",
        );
        /* redirect back */
        if ($update) {
          Session::flash('success_update', 'value');
          return redirect()->route('project-add-ui');
        } else {
          Session::flash('error', 'value');
          return redirect()->back();
        }
    }

    // Project image upload
    public function companyProjectImageUpload(){
        $all = (new ProjectInfoDataService())->getAllProjectInformation();

        return view('admin.project-info.project-image', compact('all'));
    }
    public function companyProjectImageUploadRequest(Request $req){
        // dd($req->all());
        $images = $req->file('project_image');

        foreach ($images as $img) {
            $ImgName = 'project_image'.time().uniqid().'.'.$img->getClientOriginalExtension();
            Image::make($img)->save('uploads/project/multi-image/'.$ImgName);
            $uplodPath = 'uploads/project/multi-image/'.$ImgName;

            $insert = (new ProjectInfoDataService())->projectImageInsert($req, $uplodPath);
        }


        if($insert){
            // Session::flash('success', 'Information Has Been Updated Successfully'); //Custom alert
            return redirect()->back()->with('message','Project Main Thumbnail Image Uploaded Successfully'); //Toastr alert
        }else {
            // Session::flash('error', 'Somthing Went wrong! Please try again later');
            Session::flash('error', 'Somthing Went wrong! Please try again later');
            return redirect()->back();
        }
    }



}
