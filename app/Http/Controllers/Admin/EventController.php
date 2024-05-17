<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DataServices\ProjectInfoDataService;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function CompanyNewEventAddUi(){
        $allEvents = (new ProjectInfoDataService())->getAllCurrentEvents();
        // dd($allEvents);
        return view('admin.event-info.index', compact('allEvents'));
    }

    public function CompanyNewEventAddRequest(Request $request){
        // dd($request->all());
        $insert = (new ProjectInfoDataService())->NewEventInfoInsert($request);

        if ($insert) {
            session::flash('success', 'value');
            return Redirect()->back();
          } else {
            Session::flash('error', 'value');
            return Redirect()->back();
          }
    }

    public function CompanyEventInfoDelete($id){
        // dd('This is for delete request');
        $eventDelete = (new ProjectInfoDataService())->EventInfoDelete($id);

        if ($eventDelete) {
            session::flash('success_soft', 'value');
            return Redirect()->back();
          } else {
            Session::flash('error', 'value');
            return Redirect()->back();
          }

    }
}
