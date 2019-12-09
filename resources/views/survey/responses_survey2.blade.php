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
								<th>How often do you use the product or service?</th>
								<th>Does the product help you achieve your goals?</th>
								<th>What is your favorite tool or portion of the product or service?</th>
								<th>What would you improve if you could?</th>
							</tr>
						</thead>

						<tbody>
							@foreach($survey_twos as $val)
							<tr class="gradeX">
								<td> {{ $val->q1_2 }} </td>
								<td> {{ $val->q2_2 }} </td>
								<td> {{ $val->q3_2 }} </td>
								<td> {{ $val->q4_2 }} </td>
				
							</tr>
							@endforeach
						</tbody>

					</table>
	
                    <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('/survey/responses-survey2') }}" name="req" id="req"> {{ csrf_field() }}
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