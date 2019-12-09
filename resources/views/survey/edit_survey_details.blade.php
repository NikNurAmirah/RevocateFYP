@extends('layouts.app2')
@section('content')

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Survey Details</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('/survey/edit-survey-details/'.$surveyDetails->id) }}" name="edit" id="edit"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Survey Name</label>
		                   		<div class="controls">
		                   			<input type="text" name="survey_name" id="survey_name" value="{{ $surveyDetails->name }}"><br>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Description</label>
		                   		<div class="controls">
		                   			<input type="text" name="survey_desc" id="survey_desc" value="{{ $surveyDetails->desc }}"><br>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Project</label>
		                   		<div class="controls">
                                    <select name="project_name" style="width: 220px" value="{{ $surveyDetails->project }}">
                                      
                                       @foreach($projects as $a) {{-- to view the created project name --}} 
                                       <option>{{$a->name}}</option> 
                                       @endforeach
                                        
                                    </select>
		                   		</div>
                                <br>
	                    </div>
	                    <div class="control-group">
	                   		<label class="control-label">Template</label>
		                   		<div class="controls">
		                   			<select name="template" style="width: 220px" value="{{ $surveyDetails->template }}">
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
	                    	<input type="submit" value="Edit" class="btn btn-success">	                    	
	                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection