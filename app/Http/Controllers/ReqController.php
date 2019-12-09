<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Req;
use App\Req2;
use App\Req3;
use App\Project;
use App\Artefact;
use App\Survey1;
use App\Survey2;
use App\Survey3;
use App\Survey;

class ReqController extends Controller
{
    public function addReq1(Request $request){ 
        if ($request->isMethod('post')) {
            $data = $request->all();
            $req = new Req;
            $req->req_input = $data['req_input'];
            $req->save();
            return redirect('/req-table')->with('flash_message_success','Projects Created Successfully!');

        }
    
        $projects = Project::all();
        $artefacts = Artefact::all();
        $survey_ones = Survey1::all();
        // $projects = Project::where(['parent_id'=>0])->get();
        return view('/survey/responses_survey1')->with(compact('projects','artefacts','survey_ones'));
    }

      public function addReq2(Request $request){ 
        if ($request->isMethod('post')) {
            $data = $request->all();
            $req2 = new Req2;
            $req2->req_input = $data['req_input'];
            $req2->save();
            return redirect('/req2-table')->with('flash_message_success','Projects Created Successfully!');

        }
    
        $projects = Project::all();
        $artefacts = Artefact::all();
        $survey_twos = Survey2::all();
        // $projects = Project::where(['parent_id'=>0])->get();
        return view('/survey/responses_survey2')->with(compact('projects','artefacts','survey_twos'));
    }

      public function addReq3(Request $request){ 
        if ($request->isMethod('post')) {
            $data = $request->all();
            $req3 = new Req3;
            $req3->req_input = $data['req_input'];
            $req3->save();
            return redirect('/req3-table')->with('flash_message_success','Projects Created Successfully!');

        }
    
        $projects = Project::all();
        $artefacts = Artefact::all();
        $survey_threes = Survey3::all();
        // $projects = Project::where(['parent_id'=>0])->get();
        return view('/survey/responses_survey3')->with(compact('projects','artefacts','survey_threes'));
    }

    public function viewReq1(Request $request){

        //$projects = Project::findOrFail($id);
      
        
        $reqs = Req::get();
        $projects = Project::get();
        $artefacts = Artefact::get();
        $surveys = Survey::get();
        $reqs = json_decode(json_encode($reqs)); 
       
        return view('req_table', compact('reqs','projects','artefacts','surveys'));
    }

    public function viewReq2(){

        //$projects = Project::findOrFail($id);
        $req2s = Req2::get();
        $projects = Project::get();
        $artefacts = Artefact::get();
        $surveys = Survey::get();
        $req2s = json_decode(json_encode($req2s));       
        return view('req2_table', compact('req2s','projects','artefacts','surveys'));
    }

    public function viewReq3(){

        //$projects = Project::findOrFail($id);
        $req3s = Req3::get();
        $projects = Project::get();
        $artefacts = Artefact::get();
        $surveys = Survey::get();
        $req3s = json_decode(json_encode($req3s));       
        return view('req3_table', compact('req3s','projects','artefacts','surveys'));
    }

     public function editReq1(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Req::where(['id'=>$id])->update(['req_input'=>$data['req_input']]);
            return redirect('/req-table');
        }
        $req1Details = Req::where(['id'=>$id])->first();
        return view('edit_req1')->with(compact('req1Details'));
    }

     public function editReq2(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Req2::where(['id'=>$id])->update(['req_input'=>$data['req_input']]);
            return redirect('/req2-table');
        }
        $req2Details = Req2::where(['id'=>$id])->first();
        return view('edit_req2')->with(compact('req2Details'));
    }

     public function editReq3(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Req3::where(['id'=>$id])->update(['req_input'=>$data['req_input']]);
            return redirect('/req3-table');
        }
        $req3Details = Req3::where(['id'=>$id])->first();
        return view('edit_req3')->with(compact('req3Details'));
    }

    public function deleteReq1(Request $request, $id = null){
        if(!empty($id)){
            Req::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }

    public function deleteReq2(Request $request, $id = null){
        if(!empty($id)){
            Req2::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }

    public function deleteReq3(Request $request, $id = null){
        if(!empty($id)){
            Req3::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }
}
