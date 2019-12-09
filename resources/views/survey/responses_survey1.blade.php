@extends('layouts.app2')
@section('content')

<h1>View Responses</h1>
<div class="container-fluid">
	{{-- <div class="fr"><a href="{{ url('add-project') }}" class="btn btn-primary btn-mini">Create New Project</a></div> --}}
		<hr>
	<div class="row-fluid">
		<div class="span12">

			<div class="widget-box">
				<div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
					<h5>Responses</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table">
						<thead>
							<tr>
								<th>How easy was it to install the software?</th>
								<th>How user-friendly is our software's interface?</th>
								<th>Is the customer support for our software helpful?</th>
								<th>How often does the software freeze or crash?</th>
								<th>What is your overall feeling about the performance of software?</th>
								<th>Please put down in your own words areas where we need to improve the software:</th>
								<th>How likely are you to recommend our software to others?</th>
							</tr>
						</thead>

						<tbody>
							@foreach($survey_ones as $val)
							<tr class="gradeX">
								<td> {{ $val->q1_1 }} </td>
								<td> {{ $val->q2_1 }} </td>
								<td> {{ $val->q3_1 }} </td>
								<td> {{ $val->q4_1 }} </td>
								<td> {{ $val->q5_1 }} </td>
								<td> {{ $val->q6_1 }} </td>
								<td> {{ $val->q7_1 }} </td>
								
							</tr>
							@endforeach
						</tbody>

					</table>
					<div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('/survey/responses-survey1') }}" name="req" id="req"> {{ csrf_field() }}
	                   	<div class="control-group">
                    <div class="control-group d-flex flex-column">
                        <label class="control-label">Add Requirement</label>
                            <div class="controls">
                                <input style="width: 100%; height: 70px;" type="input" name="req_input" id="req_input"><br>
                            </div>
                            <br>
                    </div>
                    <div class="fr">
						<input type="submit" value="Save" class="btn btn-success">
					</div>
					<hr>
					<div class="fr">
						<a href="#" class="btn btn-primary btn-mini">Download</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection