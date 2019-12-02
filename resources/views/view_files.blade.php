@extends('layouts.app2')
@section('content')

<h1>View Files</h1>
<div class="container-fluid">
	<hr>
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Files</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>Folder Name</th>
								<th>Filename</th>
								<th>Type</th>
								<th>Uploaded File</th>
							</tr>
						</thead>

						<tbody>
							@foreach($files as $file)
							<tr class="gradeX">
								<td field-key='folder'> {{ $file->folder->name or '' }} </td>
								<td> {{ $file->name }} </td>
								<td> {{ $file->type }}</td>
								<td class="center">
									{{-- @foreach($file->getMedia('file_name') as $media)
                                		<p class="form-group">
                                    	<a href="{{ $media->getUrl() }}" target="_blank">{{ $media->name }} ({{ $media->size }} KB)</a>
                                		</p>
                               		@endforeach --}}
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