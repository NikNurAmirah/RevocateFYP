@extends('layouts.app2')
@section('content')

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Project</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('/edit-project/'.$projectDetails->id) }}" name="add_project" id="add_project"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Project Name</label>
		                   		<div class="controls">
		                   			<input type="text" name="project_name" id="project_name" value="{{ $projectDetails->name }}"><br>
		                   		</div>
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