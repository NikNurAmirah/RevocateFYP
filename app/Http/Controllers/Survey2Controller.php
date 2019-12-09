<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey2;

class Survey2Controller extends Controller
{
     public function insertSurvey2(Request $request){
         if ($request->isMethod('post')) {
           $data = $request->all();
           // echo "<pre>"; print_r($data); die;
           $survey_two = new Survey2;
           $survey_two->q1_2 = $data['q1_2'];
           $survey_two->q2_2 = $data['q2_2'];
           $survey_two->q3_2 = $data['q3_2'];
           $survey_two->q4_2 = $data['q4_2'];
           $survey_two->save();
           return redirect('/survey/thank-you');

       }
       return view('survey/survey2');
    }

    public function thankyou_2(){
      return view('survey/thank_you');
    }

    public function viewResponses2(){
      
        $survey_twos = Survey2::get();
        $survey_twos = json_decode(json_encode($survey_twos));       
        return view('survey/responses_survey2', compact('survey_twos'));
    }
}
