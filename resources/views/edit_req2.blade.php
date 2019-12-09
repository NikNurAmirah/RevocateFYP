@extends('layouts.app2')
@section('content')

<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Requirement</div>

                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ url('/edit-req2/'.$req2Details->id) }}" name="req" id="req"> {{ csrf_field() }}
                        <div class="control-group">
                    <div class="control-group d-flex flex-column">
                        <label class="control-label">Add Requirement</label>
                            <div class="controls">
                                <input style="width: 100%; height: 70px;" type="input" name="req_input" id="req_input" value="{{ $req2Details->req_input }}"><br>
                            </div>
                            <br>
                    </div>
                    <div class="fr">
                        <input type="submit" value="Edit" class="btn btn-success">
                    </div>
            </div>
        </div>
    </div>
</div> 

@endsection