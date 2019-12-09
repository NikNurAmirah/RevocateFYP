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
                <div class="card-header">Survey Form</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('survey/create-survey') }}" name="create_survey" id="create_survey"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Survey Name</label>
		                   		<div class="controls">
		                   			<input type="text" name="survey_name" id="survey_name"><br>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Description</label>
		                   		<div class="controls">
		                   			<input type="text" name="survey_desc" id="survey_desc"><br>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Project</label>
		                   		<div class="controls">
                                   <select name="project_name" style="width: 220px">
                                        
                                          {{--   <a href="">{{$project->name}}</a> --}}
                                        
                                            @foreach($projects as $a) 
                                                 <option>{{$a->name}}</option> 
                                            @endforeach
                                        
                                    </select>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Template</label>
		                   		<div class="controls">
		                   			<select name="template" style="width: 220px">
                                        <option href="{{ url('survey/survey1') }}" value="survey1">Software Evaluation Survey</option>

                                        <option href="{{ url('survey/survey2') }}" value="survey2">Customer Feedback</option>
                                        
                                        <option href="{{ url('survey/survey3') }}" value="survey3">Customer Satisfactory Feedback</option>

                                    </select>
		                   		</div>
                                <br>
	                    </div>
                        <div>
                            <br>
                        </div>
	                    <div style="display: inline-block;" class="form-actions">
	                    	<input type="submit" value="Create" class="btn btn-success">
                            <a href="{{ url('/survey/view-surveys') }}" class="btn btn-primary btn-mini">Cancel</a>	                    	
	                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 


@endsection