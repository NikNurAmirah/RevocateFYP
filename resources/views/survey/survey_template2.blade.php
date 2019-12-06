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
                <div class="card-header">Customer Feedback</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('survey/survey-template2') }}" name="survey_template2" id="survey_template2"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">1. How often do you use the product or service?</label>
		                   		<div class="controls">
		                   			<input type="text" name="usage" id="usage"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">2. Does the product help you achieve your goals?</label>
		                   		<div class="controls">
		                   			<input type="text" name="help" id="help"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">3. What is your favorite tool or portion of the product or service?</label>
		                   		<div class="controls">
		                   			<input type="text" name="tool" id="tool"><br>
		                   		</div>
		                   		<br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">4. What would you improve if you could?</label>
		                   		<div class="controls">
		                   			<input type="text" name="improve" id="improve"><br>
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