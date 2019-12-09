<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyResponsesController extends Controller
{
    public function __construct(){
    $this->middleware('auth');
    }

    public function createSurvey(Request $request){ 
        if ($request->isMethod('post')) {
            $data = $request->all();
            $req = new Survey;
            $survey->name = $data['project_name'];
            $survey->desc = $data['artefact_name'];
            $survey->project = $data['req_input'];
            $survey->save();
            return redirect('/survey/view-surveys')->with('flash_message_success','Projects Created Successfully!');

        }
    
        $projects = Project::all();
        // $projects = Project::where(['parent_id'=>0])->get();
        return view('/survey/create_survey')->with(compact('projects'));
    }

    public function createSurvey(Request $request){ 
        if ($request->isMethod('post')) {
            $data = $request->all();
            $req = new Survey;
            $survey->name = $data['project_name'];
            $survey->desc = $data['artefact_name'];
            $survey->project = $data['req_input'];
            $survey->save();
            return redirect('/survey/view-surveys')->with('flash_message_success','Projects Created Successfully!');

        }
    
        $projects = Project::all();
        // $projects = Project::where(['parent_id'=>0])->get();
        return view('/survey/create_survey')->with(compact('projects'));
    }
}
