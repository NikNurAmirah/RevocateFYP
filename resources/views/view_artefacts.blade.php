@extends('layouts.app2')
@section('content')

<h1>View Artefacts</h1>
<div class="container-fluid">
	<hr>
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Artefacts</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>Project Name</th>
								<th>Artefact Name</th>
								<th>Type</th>
								<th>Uploaded Artefact</th>
							</tr>
						</thead>

						<tbody>
							@foreach($artefacts as $artefact)
							<tr class="gradeX">
								<td field-key='project'> {{ $artefact->project->name or '' }} </td>
								<td> {{ $artefact->name }} </td>
								<td> {{ $artefact->type }}</td>
								<td class="center">
									@foreach($file->getMedia('file_name') as $media)
                                		<p class="form-group">
                                    	<a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                		</p>
                               		@endforeach
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

@endsection