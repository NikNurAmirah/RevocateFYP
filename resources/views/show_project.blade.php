@extends('layouts.app2')
@section('content')

	
	<h3 class="page-title">{{ $project->name }}{{-- {{ route('view-projects',[$project->name]) }} --}}</h3>
		<a href="{{url('add-artefact' . $project->id)}}" class="btn btn-success disabled">Add file to this Project</a>	
	

@endsection