@extends('layouts.app2')
@section('content')

	<h3 class="page-title">{{$folder->name}}</h3>
		<a href="{{url('admin/files/create?folder_id=' . $folder->id)}}" class="btn btn-success disabled">Add file to this Folder</a>	

@endsection