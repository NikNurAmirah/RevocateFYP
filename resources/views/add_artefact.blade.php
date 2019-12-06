@extends('layouts.app2')
@section('content')

<div class="container">
 {{--    @if(Session::has('flash_message_error'))
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
                <div class="card-header">Create Interview Artefact</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('add-artefact') }}" name="add_artefact" id="add_artefact"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Project</label>
		                   		<div class="controls">
                                    <select name="project_name" style="width: 220px">
                                        <?php echo $projects_dropdown; ?>
                                        
                                    </select>
		                   			{{-- <input type="text" name="folder_name" id="folder_name"><br> --}}
		                   		</div>
                                <br>
	                    </div>
                        <div class="control-group">
                            <label class="control-label">Artefact Name</label>
                                <div class="controls">
                                    <input type="text" name="artefact_name" id="artefact_name"><br>
                                </div>
                                <br>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Artefact Type</label>
                                <div class="controls">
                                    <select name="adtefact_type" style="width: 220px">
                                    <option value="audio">Audio</option>
                                    <option value="video">Video</option>
                                    {{-- <input type="text" name="artefact_type" id="artefact_type"><br> --}}
                                </select>
                                </div>
                                <br>
                        </div>
                        
                        <div class="control-group d-flex flex-column">
                            <label class="control-label">Upload Artefact</label>
                                <div class="controls">
                                    <input type="file" name="audio" id="artefact_upload"><br>
                                </div>
                                <br>
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