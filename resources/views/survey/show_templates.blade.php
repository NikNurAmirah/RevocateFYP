@extends('layouts.app2')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>No.</th>
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
									<div class="fr"><a href="{{ url('/survey/survey-template1') }}" class="btn btn-primary btn-mini">View</a> 
									</div>
								</td>
							</tr>
							<tr class="gradeX">
								<td> 2. </td>
								<td>Customer Feedback
								   {{--  <a href="{{ url('show-project',[$project->id]) }}" style="text-decoration: underline">{{ $project->name }}</a> --}}
								</td>
								<td class="center">
									<div class="fr"><a href="{{ url('/survey/survey-template2') }}" class="btn btn-primary btn-mini">View</a> 
									</div>
								</td>
							</tr>
							<tr class="gradeX">
								<td> 3. </td>
								<td>Customer Satisfactory Feedback
								   {{--  <a href="{{ url('show-project',[$project->id]) }}" style="text-decoration: underline">{{ $project->name }}</a> --}}
								</td>
								<td class="center">
									<div class="fr"><a href="{{ url('/survey/survey-template3') }}" class="btn btn-primary btn-mini">View</a> 
									</div>
								</td>
							</tr>
							
						</tbody>

					</table>

					<div class="fr"><a href="{{ url('survey/create-survey') }}" class="btn btn-primary btn-mini">Choose</a>
		<hr>


        </div>
    </div>    
   
</div>

@endsection