@extends('layouts.app2')
@section('content')

<h1>View Survey list</h1>
<div class="container-fluid">
	<div class="fr"><a href="{{ url('survey/create-survey') }}" class="btn btn-primary btn-mini">Add New Survey</a>
		<hr>
	<div class="row-fluid">
		<div class="span12">

			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h3>Surveys</h3>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Survey Name</th>
								<th>Description</th>
								<th>Project</th>
								<th>Template</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							@foreach($surveys as $survey)
							
							<tr class="gradeX">
								<td> {{ $survey->id }} </td>
								<td> {{ $survey->name }} </td>
								<td> {{ $survey->desc }} </td>
								
								<td> {{ $survey->project }}</td>
								
								<td>{{-- {{ $survey->template }}  --}}
									@if($survey->template=='survey1')
									<a href="{{ url('/survey/survey1') }}" style="text-decoration: underline">{{ $survey->template }}  </a>
									@elseif($survey->template=='survey2')
									<a href="{{ url('/survey/survey2') }}" style="text-decoration: underline">{{ $survey->template }}  </a>
									@else
									<a href="{{ url('/survey/survey3') }}" style="text-decoration: underline">{{ $survey->template }}  </a>
									@endif
									

								</td>
								<td class="center">
									<div style="display: inline-block;" class="fr"><a href="{{ url('/survey/edit-survey-details/'.$survey->id) }}" class="btn btn-primary btn-mini">Edit</a> <a id="delSurvey" href="{{ url('survey/delete-survey-details/'.$survey->id) }}" class="btn btn-danger btn-mini">Delete</a>
									<div>
									@if($survey->template=='survey1')
									<a href="{{ url('/survey/responses-survey1') }}" class="btn btn-primary btn-mini">Responses</a>
									@elseif($survey->template=='survey2')
									<a href="{{ url('/survey/responses-survey2') }}" class="btn btn-primary btn-mini">Responses </a>
									@else
									<a href="{{ url('/survey/responses-survey3') }}" class="btn btn-primary btn-mini">Responses </a>
									@endif
									</div>
									</div>
								</td>
							</tr>
							
							@endforeach
						</tbody>

					</table>
					<br><br>
					<h3>Templates</h3>
					{{-- <div class="fr"><a href="{{ url('survey/create-survey') }}" class="btn btn-primary btn-mini">Choose</a></div> --}}
					
					  <table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>ID</th>
								<th>Templates</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							
							<tr class="gradeX">
								<td> 1. </td>
								<td>Software Evaluation Survey
								   {{--  <a href="{{ url('show-project',[$project->id]) }}" style="text-decoration: underline">{{ $project->name }}</a> --}}
								</td>
								<td class="center">
									<div class="fr"><a href="{{ url('/survey/view-survey1') }}" class="btn btn-primary btn-mini">View</a> 
									</div>
								</td>
							</tr>
							<tr class="gradeX">
								<td> 2. </td>
								<td>Customer Feedback
								   {{--  <a href="{{ url('show-project',[$project->id]) }}" style="text-decoration: underline">{{ $project->name }}</a> --}}
								</td>
								<td class="center">
									<div class="fr"><a href="{{ url('/survey/view-survey2') }}" class="btn btn-primary btn-mini">View</a> 
									</div>
								</td>
							</tr>
							<tr class="gradeX">
								<td> 3. </td>
								<td>Customer Satisfactory Feedback
								   {{--  <a href="{{ url('show-project',[$project->id]) }}" style="text-decoration: underline">{{ $project->name }}</a> --}}
								</td>
								<td class="center">
									<div class="fr"><a href="{{ url('/survey/view-survey3') }}" class="btn btn-primary btn-mini">View</a> 
									</div>
								</td>
							</tr>
							
						</tbody>
						
					</table>
					
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection