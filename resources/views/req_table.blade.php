@extends('layouts.app2')
@section('content')

<h1>Requirements</h1>
<div class="container-fluid">
	<div class="fr">
		<a href="#" class="btn btn-primary btn-mini">Add New</a>
	</div>
		<hr>
	<div class="row-fluid">
		<div class="span12">

			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Lists of Requirements</h5>
				</div>
				
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th width="5%">No.</th>
								<th width="40%">Requirements</th>
								<th width="20%">Filename</th>
								<th width="20%">Folder Name</th>
								<th width="15%">Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1.</td>
								<td>The user shall be able to login with email and password</td>
								<td>test</td>
								<td>new</td>
								<td>
									<div class="fr">
									<a href="#" class="btn btn-primary btn-mini">Edit</a> <a id="delFolder" href="#" class="btn btn-danger btn-mini">Delete</a>
									</div>
								</td>
							</tr>
							{{-- @foreach($folders as $folder)
							<tr class="gradeX">
								<td> {{ $folder->id }} </td>
								<td> {{ $folder->name }} </td>
								<td class="center">
									<div class="fr"><a href="{{ url('edit-folder/'.$folder->id) }}" class="btn btn-primary btn-mini">Edit</a> <a id="delFolder" href="{{ url('delete-folder/'.$folder->id) }}" class="btn btn-danger btn-mini">Delete</a>
									</div>
								</td>
							</tr>
							@endforeach --}}
						</tbody>

					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection