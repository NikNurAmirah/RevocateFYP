<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Survey1;

class Survey1Controller extends Controller
{
    public function insertSurvey1(Request $request){
         if ($request->isMethod('post')) {
           $data = $request->all();
           $survey_one = new Survey1;
           $survey_one->q1_1 = $data['q1_1'];
           $survey_one->q2_1 = $data['q2_1'];
           $survey_one->q3_1 = $data['q3_1'];
           $survey_one->q4_1 = $data['q4_1'];
           $survey_one->q5_1 = $data['q5_1'];
           $survey_one->q6_1 = $data['q6_1'];
           $survey_one->q7_1 = $data['q7_1'];
           $survey_one->save();
           return redirect('/survey/thank-you');

       }
       return view('survey/survey1');
    }

    public function thankyou_1(){
      return view('survey/thank_you');
    }

    public function viewResponses1(){
      
        $survey_ones = Survey1::get();
        $survey_ones = json_decode(json_encode($survey_ones));       
        return view('survey/responses_survey1', compact('survey_ones'));
    }
}
 