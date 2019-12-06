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
                                    <select name="project_id" style="width: 220px">
                                        <option value="">Projects</option>
                                    </select>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Template</label>
		                   		<div class="controls">
		                   			<select name="template" style="width: 220px">
                                        <option value="survey1">Survey Template 1</option>
                                        <option value="survey2">Survey Template 2</option>
                                        <option value="survey3">Survey Template 3</option>
                                    </select>
		                   		</div>
                                <br>
	                    </div>
                        <div>
                            <br>
                        </div>
	                    <div class="form-actions">
	                    	<input type="submit" value="Create" class="btn btn-success"><br><br><a href="{{ url('/survey/show-templates') }}" class="btn btn-primary btn-mini">Back</a>	                    	
	                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 


@endsection