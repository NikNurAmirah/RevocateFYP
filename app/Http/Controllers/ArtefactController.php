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
    private $audio_ext = ['mp3', 'ogg', 'mpga'];
    private $video_ext = ['mp4', 'mpeg'];


    public function addArtefact(Request $request){


    	// if ($request->isMethod('post')) {
    	// 	$data = $request->all();
    	// 	$artefact = new Artefact;
    	// 	$project->name = $data['project_name'];
    	// 	$artefact->name = $data['artefact_name'];
    	// 	$artefact->save();
     //        return redirect('/view-artefacts');

    	// }

        $projects = Project::where(['parent_id'=>0])->get();
        $projects_dropdown = "<option selected disabled>Select</option>";
        foreach ($projects as $proj) {
            $projects_dropdown .= "<option value'".$proj->id."'>".$proj->name."</option>";
            // $sub_projects = Project::where(['parent_id'=>$fol->id])->get();
            //     foreach ($sub_projects as $sub_fol) {
            //         $projects_dropdown .= "<option value = '".$sub_fol->id."'>&nbsp;--&nbsp;".$sub_fol->name."</option>";
            //     }
        }
    	return view('add_artefact')->with(compact('projects_dropdown'));
    }

    public function store(Request $request)
    {

        $artefact = Artefact::create($this->validateRequest());
        event(new NewArtefactHasRegisteredEvent($artefact));
        return redirect('artefacts');

        // validation
        // $this->validate($request, [
        //     'title' => 'required',
        //     'description' => 'nullable',
        //     'artefact' => 'required|artefact|mimes:jpeg,jpg,png,gif|max:2048',
        //     'audio' =>'nullable|artefact|mimes:audio/mpeg,mpga,mp3,wav,aac'
        // ]); 

     //     // code for upload 'artefact'

     //      if($request->hasArtefact('artefact')){
     //        $uniqueid=uniqid();
     //        $original_name=$request->artefact('artefact')->getClientOriginalName();
     //        $size=$request->artefact('artefact')->getSize();
     //        $extension=$request->artefact('artefact')->getClientOriginalExtension();
     //        $name=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
     //        $imagepath=url('/storage/uploads/artefacts/'.$name);
     //        $path=$request->artefact('artefact')->storeAs('public/uploads/artefacts/',$name);  
     //       }


     //    // code for upload 'audio'
     //    // handle multiple artefacts 
     //   if(is_array($request->artefact('audio')))
     //    {
     //     $audios=array();
     //     foreach($request->artefact('audio') as $artefact) {
     //        $uniqueid=uniqid();
     //        $original_name=$artefact->getClientOriginalName();
     //        $size=$artefact->getSize();
     //        $extension=$artefact->getClientOriginalExtension();
     //        $artefactname=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
     //        $audiopath=url('/storage/upload/artefacts/audio/'.$artefactname);
     //        $path=$artefact->storeAs('/upload/artefacts/audio',$artefactname);
     //        array_push($audios,$audiopath);
     //     }
     //     $all_audios=implode(",",$audios);
     // }else{ 
     //     // handle single artefact 
     //     if($request->hasArtefact('audio')){
     //     $uniqueid=uniqid();
     //     $original_name=$request->artefact('audio')->getClientOriginalName();
     //     $size=$request->artefact('audio')->getSize();
     //     $extension=$request->artefact('audio')->getClientOriginalExtension();
     //     $artefactname=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
     //     $audiopath=url('/storage/upload/artefacts/audio/'.$artefactname);
     //     $path=$artefact->storeAs('public/upload/artefacts/audio/',$artefactname);
     //     $all_audios=$audiopath;
     //    }
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
    	$artefacts = Artefact::get();
        

    	$artefacts = json_decode(json_encode($artefacts)); 
    	return view('view_artefacts')->compact('artefacts');
    }

    public function surveyTemplate(Request $request){
        return view('survey_template');
    }

    public function reqTable(Request $request){
        return view('req_table');
    }



}
