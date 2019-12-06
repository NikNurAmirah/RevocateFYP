@extends('layouts.app2')
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
                    <form class="form-horizontal" method="post" action="{{ url('survey/survey-template3') }}" name="survey_template2" id="survey_template2"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">1. How did you first learn about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="first" id="first"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">2. How likely is it that you could recommend our product/website to a friend or colleague?</label>
		                   		<div class="controls">
		                   			<input type="text" name="recommed" id="recommed"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">3. What comes to your mind when thinking about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="mind" id="mind"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">4. If review our product/website with a score out of 10, what score would you give us?</label>
		                   		<div class="controls">
		                   			<input type="text" name="score" id="score"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
                            <label class="control-label">5. What is your overall feeling about the performance of (SOFTWARE name)?</label>
                                <div class="controls">
                                    <input type="radio" name="level4" value="satisfied" > Satisfied<br>
									<input type="radio" name="level4" value="indifferent"> No specific feelings<br>
								    <input type="radio" name="level4" value="dissatisfied"> Dissatisfied
                                </div>
                                <br>
                        </div>
                        <div class="control-group">
	                   		<label class="control-label">6. What do you like most about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="like_most" id="like_most"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                     <div class="control-group">
	                   		<label class="control-label">6. What do you like least about our product/website?</label>
		                   		<div class="controls">
		                   			<input type="text" name="like_least" id="like_least"><br>
		                   		</div>
		                   		<br>
	                    </div>
                        <div>
                            <br>
                        </div>
	                    <div class="fr"><a href="{{ url('/survey/show-templates') }}" class="btn btn-primary btn-mini">Back</a>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 


@endsection