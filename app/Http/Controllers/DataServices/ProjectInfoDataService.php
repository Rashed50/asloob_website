<?php

    namespace App\Http\Controllers\DataServices;

use App\Models\Event;
use App\Models\ProjectImgUpload;
use App\Models\ProjectInfo;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class ProjectInfoDataService{
    public function getAllCurrentEvents(){
        return Event::where('status', 1)->get();
    }

    public function NewEventInfoInsert($request){
        // dd($request->all());
        // dd($request->file_url);

        // $image = Image::make($request->file('file_url'));
        // $imageName = time().'-'.$request->file('image')->getClientOriginalName();
        // $destinationPath = public_path('events/');
        // $image->save($destinationPath.$imageName);

        // $file = $request->file('file_url');
        // $appoint_name = 'events-' . time() . '.' . $file->getClientOriginalExtension();
        // $destinationPath = "uploads/events/";
        // $uploadPath =  $destinationPath . $appoint_name;
        // $file->move($destinationPath, $appoint_name);

        $image = $request->file('file_url');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(166,110)->save('uploads/events/'.$name_gen);
        $save_url = 'uploads/events/'.$name_gen;

        // dd($save_url);
        return Event::insert([
            'event_title' => $request->title,
            'event_subtitle' => $request->sub_title,
            'event_description' => $request->event_description,
            'file_url' => $save_url,
            'created_at' => Carbon::now(),
        ]);
    }

    public function EventInfoDelete($id){
        return Event::where('event_id', $id)->delete();
    }

    // Project Info DataService Start
    public function getAllProjectInformation()
    {
        return  ProjectInfo::where('status', 1)->orderBy('proj_id', 'DESC')->get();
    }

    public function insertNewProjectInformation($proj_name, $starting_date, $address, $proj_code, $proj_budget, $proj_deadline, $proj_description, $proj_main_thumb_Path)
    {
        return ProjectInfo::insert([
            'proj_name' => $proj_name,
            'starting_date' => $starting_date,
            'address' => $address,
            'proj_code' => $proj_code,
            'proj_budget' => $proj_budget,
            'proj_deadline' => $proj_deadline,
            'proj_description' => $proj_description,
            'proj_main_thumb' => $proj_main_thumb_Path,
            'created_at' => Carbon::now(),
        ]);
    }
    public function findAProjectInformation($proj_id)
    {
        // return DB::table($this->projectInfoTable)->where('status', 1)->where('proj_id', $proj_id)->first();
        return ProjectInfo::where('status', 1)->where('proj_id', $proj_id)->first();
    }

    public function updateProjectInformation($proj_id, $proj_name, $starting_date, $address, $proj_code, $proj_budget, $proj_deadline, $proj_description)
    {
        return ProjectInfo::where('proj_id', $proj_id)->update([
            'proj_name' => $proj_name,
            'starting_date' => $starting_date,
            'address' => $address,
            'proj_code' => $proj_code,
            'proj_budget' => $proj_budget,
            'proj_deadline' => $proj_deadline,
            'proj_description' => $proj_description,
            'updated_at' => Carbon::now(),
        ]);
    }

    // Project Multiple image upload
    public function GetProjectWiseMultiImg($proj_id){
        return ProjectImgUpload::where('project_id', $proj_id)->get();
    }

    public function projectImageInsert($request, $uplodPath){
        // dd($uplodPath);
         // $uploadBy = Auth::user()->id;
         return ProjectImgUpload::insert([
            'project_id' => $request->proj_id,
            'photo_path' => $uplodPath,
            // 'uploaded_by_id' => $uploadBy,
            'created_at' => Carbon::now(),
        ]);

    }

}

