@extends('layouts.app3')
@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Software Evaluation Survey</div>

                <div class="card-body">
                	<div>
                		<p>Dear User,<br>

Thank you for visiting our software survey. By filling out this 5 minute survey, you will help us identify issues and provide you with the best quality product and service.</p>
                	</div>
                	<hr>
                    <form class="form-horizontal" method="post" action="{{ url('survey/survey1') }}" name="survey_one" id="survey_one"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">1. How easy was it to install the software?</label>
		                   		<div class="controls">
		                   			<input type="radio" name="q1_1" id="q1_1" value="easy" > Extremely Easy<br>
									<input type="radio" name="q1_1" id="q1_1" value="moderate"> Moderately easy<br>
								    <input type="radio" name="q1_1" id="q1_1" value="hard"> Not at all easy
		                   		</div>
	                    </div>
	                    <div><br></div>
                        <div class="control-group">
                            <label class="control-label">2. How user-friendly is our software's interface?</label>
                                <div class="controls">
									<input type="radio" name="q2_1" id="q2_1" value="extremely" > Extremely User-friendly
									<br>
									<input type="radio" name="q2_1" id="q2_1" value="very"> Very User-friendly<br>
								    <input type="radio" name="q2_1" id="q2_1" value="moderately"> Moderately User-friendly
								    <br>
								    <input type="radio" name="q2_1" id="q2_1" value="not_very"> Not Very User-friendly<br>
								    <input type="radio" name="q2_1" id="q2_1" value="not"> Not User-friendly
                                </div>
                        </div>
                        <div><br></div>
                        <div class="control-group">
                            <label class="control-label">3. Is the customer support for our software helpful?</label>
                                <div class="controls">
                                    <input type="radio" name="q3_1" id="q3_1" value="easy" > Very Helpful<br>
									<input type="radio" name="q3_1" id="q3_1" value="moderate"> Sometimes yes, sometimes no<br>
								    <input type="radio" name="q3_1" id="q3_1" value="hard"> Not helpful at all
                                </div>
                        </div>
                        <div><br></div>
                        <div class="control-group">
                            <label class="control-label">4. How often does the software freeze or crash?</label>
                                <div class="controls">
                                    <input type="radio" name="q4_1" id="q4_1" value="constantly" > Constantly<br>
									<input type="radio" name="q4_1" id="q4_1" value="often"> Often<br>
								    <input type="radio" name="q4_1" id="q4_1" value="undecide"> Couldn't say yet (new user)
								    <br>
								    <input type="radio" name="q4_1" id="q4_1" value="occasionally"> Occasionally<br>
								    <input type="radio" name="q4_1" id="q4_1" value="never"> Never
                                </div>
                        </div>
                        <div><br></div>
                        <div class="control-group">
                            <label class="control-label">5. What is your overall feeling about the performance of software?</label>
                                <div class="controls">
                                    <input type="radio" name="q5_1" id="q5_1" value="satisfied" > Satisfied<br>
									<input type="radio" name="q5_1" id="q5_1" value="indifferent"> No specific feelings<br>
								    <input type="radio" name="q5_1" id="q5_1" value="dissatisfied"> Dissatisfied
                                </div>
                        </div>
                        <div><br></div>
                        <div class="control-group">
	                   		<label class="control-label">6. Please put down in your own words areas where we need to improve the software:</label>
		                   		<div class="controls">
		                   			<input type="text" name="q6_1" id="q6_1"><br>
		                   		</div>
	                    </div>
	                    <div><br></div>
	                    <div class="control-group">
                            <label class="control-label">7. How likely are you to recommend our software to others?</label>
                                <div class="controls">
                                    <input type="radio" name="q7_1" id="q7_1" value="100" > Highly likely 100%<br>
									<input type="radio" name="q7_1" id="q7_1" value="75"> Quite likely 75%<br>
								    <input type="radio" name="q7_1" id="q7_1" value="50"> Maybe yes, Maybe no 50%<br>
								    <input type="radio" name="q7_1" id="q7_1" value="25"> Not very likely 25%<br>
								    <input type="radio" name="q7_1" id="q7_1" value="0"> Wouldn't recommend it to anyone 0%
                                </div>
                        </div>
                        <div>
                            <br>
                        </div>
	                  <div class="fr">
                        <div class="fr"><input type="submit" value="Create" class="btn btn-success">
                      </div>
       
                    </form>
                </div>
            </div>
        </div>
    </div>
  
</div> 


@endsection