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
                <div class="card-header">Create Interview File</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('add-file') }}" name="add_file" id="add_file"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Folder</label>
		                   		<div class="controls">
                                    <select name="folder_id" style="width: 220px">
                                        <option value="">Folders</option>
                                    </select>
		                   			{{-- <input type="text" name="folder_name" id="folder_name"><br> --}}
		                   		</div>
	                    </div>
                        <div class="control-group">
                            <label class="control-label">Filename</label>
                                <div class="controls">
                                    <input type="text" name="file_name" id="file_name"><br>
                                </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">File Type</label>
                                <div class="controls">
                                    <input type="text" name="file_type" id="file_type"><br>
                                </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Upload File</label>
                                <div class="controls">
                                    <input type="file" name="file_upload" id="file_upload"><br>
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