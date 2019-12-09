<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Artefact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Project;

class ArtefactController extends Controller
{
    // private $audio_ext = ['mp3', 'ogg', 'mpga'];
    // private $video_ext = ['mp4', 'mpeg'];

    public function __construct(){
    $this->middleware('auth');
    }

    public function index(){
        return view('file');
    }
 

    public function addArtefact(Request $request){

    	// if ($request->isMethod('post')) {
    	// 	$data = $request->all();
    	// 	$artefact = new Artefact;
    	// 	$project->name = $data['project_name'];
    	// 	$artefact->name = $data['artefact_name'];
    	// 	$artefact->save();
        //  return redirect('/view-artefacts');
    	// }

        
        $projects = Project::all();
    	return view('add_artefact')->with(compact('projects'));
    }

    public function store(Request $request)
    {

        $artefact = Artefact::create($request->all());
        $artefact->update(['extension'=> $request->file('image')->store('extension','public')]);
    
    }


    private function validateRequest(){
        return request()->validate([
            'project_id' => 'required',
            'name' => 'required',
            'type' => 'required',
            // 'artefact' => 'required|artefact|mimes:jpeg,jpg,png,gif|max:2048',
            'audio' =>'nullable|artefact|mimes:audio/mpeg,mpga,mp3,wav,aac'

        ]);
    }

    public function viewArtefacts(Request $request){
    	
    	return view('view_interview');
    }

   

    public function reqTable(Request $request){
        return view('req_table');
    }



}
