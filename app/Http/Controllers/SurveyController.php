<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey;
use App\Project;


class SurveyController extends Controller
{
    public function __construct()
  {
    $this->middleware('auth');
  }
 
  /** 
     * Show the selected survey
     *
     * @param int $id
     * @return Response
     */

    public function createSurvey(Request $request){ 
        if ($request->isMethod('post')) {
            $data = $request->all();
            $survey = new Survey;
            $survey->name = $data['survey_name'];
            $survey->desc = $data['survey_desc'];
            $survey->project = $data['project_name'];
            $survey->template = $data['template'];
            $survey->save();
            return redirect('/survey/view-surveys')->with('flash_message_success','Projects Created Successfully!');

        }
    
        $projects = Project::all();
        // $projects = Project::where(['parent_id'=>0])->get();
        return view('/survey/create_survey')->with(compact('projects'));
    }

    public function editSurvey(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Survey::where(['id'=>$id])->update(['name'=>$data['survey_name'],'desc'=>$data['survey_desc'],'project'=>$data['project_name'],'template'=>$data['template']]);
            return redirect('/survey/view-surveys');
        }
        $projects = Project::all();
        $surveyDetails = Survey::where(['id'=>$id])->first();
        return view('/survey/edit_survey_details')->with(compact('surveyDetails','projects'));
    } 


     public function deleteSurvey(Request $request, $id = null){
        if(!empty($id)){
            Survey::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }
     public function template1(Request $request){
        return view('/survey/view_survey1');
    }
    public function template2(Request $request){
        return view('/survey/view_survey2');
    }

    public function template3(Request $request){
        return view('/survey/view_survey3');
    }

    public function show_template(Request $request){
        return view('/survey/show_templates');
    }

     public function viewSurveys(){
        
        // $projects = Project::all();
        $surveys = Survey::get();
        // $list_survey_template = Survey::get();
        $surveys = json_decode(json_encode($surveys));       
        return view('survey/view_surveys', compact('surveys'));
    }

    // public function listSurvey(){
      
    //   $list_survey_template = json_decode(json_encode($list_survey_template));       
    //   return view('survey/view_surveys', compact('list_survey_template'));
    // }
    
 
  
}
