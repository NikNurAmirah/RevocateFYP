@extends('layouts.app2')
@section('content')

<div class="container">
   {{--  @if(Session::has('flash_message_error'))
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
    @endif --}}

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Project</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('add-project') }}" name="add_project" id="add_project"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Project Name</label>
		                   		<div class="controls">
		                   			<input type="text" name="project_name" id="project_name"><br>
		                   		</div>
	                    </div>
                        <div>
                            <br>
                        </div>
	                    <div class="form-actions">
	                    	<input type="submit" value="Create" class="btn btn-success">	                    	
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 

@endsection