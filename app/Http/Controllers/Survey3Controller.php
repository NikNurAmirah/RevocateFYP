<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey3;

class Survey3Controller extends Controller
{
    public function insertSurvey3(Request $request){
         if ($request->isMethod('post')) {
           $data = $request->all();
           $survey_three = new Survey3;
           $survey_three->q1_3 = $data['q1_3'];
           $survey_three->q2_3 = $data['q2_3'];
           $survey_three->q3_3 = $data['q3_3'];
           $survey_three->q4_3 = $data['q4_3'];
           $survey_three->q5_3 = $data['q5_3'];
           $survey_three->q6_3 = $data['q6_3'];
           $survey_three->save();
           return redirect('/survey/thank-you');

       }
       return view('survey/survey3');
    }

    public function thankyou_3(){
      return view('survey/thank_you');
    }

    public function viewResponses3(){
      
        $survey_threes = Survey3::get();
        $survey_threes = json_decode(json_encode($survey_threes));       
        return view('survey/responses_survey3', compact('survey_threes'));
    }
}
