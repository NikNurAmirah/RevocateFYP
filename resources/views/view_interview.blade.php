@extends('layouts.app2')
@section('content')

<h1>View Interview Artefacts</h1>
<div class="container-fluid">
	<div class="fr"><a href="{{ url('add-artefact') }}" class="btn btn-primary btn-mini">Create New Artefact</a></div>
		<hr>
	<div class="row-fluid">
		<div class="span12">

			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Interview Artefacts</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Project Name</th>
								<th>Artefact Name</th>
								<th>Artefact Type</th>
								<th>Uploaded Files</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
						{{-- 	@foreach($projects as $project)
							<tr class="gradeX">
								<td> </td>
								<td></td>
								<td class="center">
									<div class="fr"><a href="{{ url('edit-project/'.$project->id) }}" class="btn btn-primary btn-mini">Edit</a> <a id="delProject" href="{{ url('delete-project/'.$project->id) }}" class="btn btn-danger btn-mini">Delete</a>
									</div>
								</td>
							</tr>
							@endforeach --}}
						</tbody>

					</table>
					<div class="fr"><a href="{{ url('view-projects') }}" class="btn btn-primary btn-mini">Back</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection