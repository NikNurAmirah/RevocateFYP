@extends('layouts.app2')
@section('content')

<h1>View Folders</h1>
<div class="container-fluid">
	<div class="fr"><a href="{{ url('add-folder') }}" class="btn btn-primary btn-mini">Create New Folder</a>
		<hr>
	<div class="row-fluid">
		<div class="span12">

			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Folders</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>Folder ID</th>
								<th>Folder Name</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							@foreach($folders as $folder)
							<tr class="gradeX">
								<td> {{ $folder->id }} </td>
								<td> {{ $folder->name }} </td>
								<td class="center">
									<div class="fr"><a href="{{ url('edit-folder/'.$folder->id) }}" class="btn btn-primary btn-mini">Edit</a> <a id="delFolder" href="{{ url('delete-folder/'.$folder->id) }}" class="btn btn-danger btn-mini">Delete</a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>

					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection