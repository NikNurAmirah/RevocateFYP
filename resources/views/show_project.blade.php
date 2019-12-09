@extends('layouts.app2')
@section('content')

	
	{{-- <h3 class="page-title">{{ $project->name }}</h3>
		
	
 --}}


<h1>{{$project->name}}</h1>
	<div style="display: inline-block;">
 	<a href="{{url('view-interview')}}" class="btn btn-success ">Add Interfiew Artefact</a>
	<a href="{{url('/survey/view-surveys')}}" class="btn btn-success ">Add Survey Artefact</a>
	</div>	
@endsection