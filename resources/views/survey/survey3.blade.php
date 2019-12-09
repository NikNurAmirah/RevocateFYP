@extends('layouts.app3')
@section('content')

<div class="container">
    {{-- @if(Session::has('flash_message_error'))
    <div class="alert alert-error alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{!! session('flash_message_error') !!}</strong>
        
    </div>
    @endif
    @if(Session::has('flash_message_success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
            <strong>{!! session('flash_message_success') !!}</strong>
        
    </div>
    @endif
 --}}
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Customer Satisfactory Feedback</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('survey/survey3') }}" name="survey_three" id="survey_three"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">1. How did you first learn about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="q1_3" id="q1_3"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">2. How likely is it that you could recommend our product/website to a friend or colleague?</label>
		                   		<div class="controls">
		                   			<input type="text" name="q2_3" id="q2_3"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">3. What comes to your mind when thinking about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="q3_3" id="q3_3"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">4. If review our product/website with a score out of 10, what score would you give us?</label>
		                   		<div class="controls">
		                   			<input type="text" name="q4_3" id="q4_3"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
                            <label class="control-label">5. What is your overall feeling about the performance of software?</label>
                                <div class="controls">
                                    <input type="radio" name="q5_3" id="q5_3" value="satisfied" > Satisfied<br>
									<input type="radio" name="q5_3" id="q5_3" value="indifferent"> No specific feelings<br>
								    <input type="radio" name="q5_3" id="q5_3" value="dissatisfied"> Dissatisfied
                                </div>
                                <br>
                        </div>
                        <div class="control-group">
	                   		<label class="control-label">6. What do you like most about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="q6_3" id="q6_3"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                     <div class="control-group">
	                   		<label class="control-label">7. What do you like least about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="q7_3" id="q7_3"><br>
		                   		</div>
		                   		<br>
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