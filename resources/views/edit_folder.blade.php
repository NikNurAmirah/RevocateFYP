@extends('layouts.app2')
@section('content')

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Folder</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('/edit-folder/'.$folderDetails->id) }}" name="add_folder" id="add_folder"> {{ csrf_field() }}
	                   	<div class="control-group">
	                   		<label class="control-label">Folder Name</label>
		                   		<div class="controls">
		                   			<input type="text" name="folder_name" id="folder_name" value="{{ $folderDetails->name }}"><br>
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