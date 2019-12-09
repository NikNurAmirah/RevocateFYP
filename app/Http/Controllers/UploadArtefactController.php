<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artefact;

class UploadArtefactController extends Controller
{

	public function __construct(){
    $this->middleware('auth');
    }
    
    public function index(){
        return view('file');
    }

    public function store(Request $request)
    {

        $artefact = Artefact::create($request->all());
        $artefact->update(['extension'=> $request->file('image')->store('extension','public')]);
    
    }
}
