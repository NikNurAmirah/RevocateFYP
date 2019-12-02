<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Auth;
// use Session;
// use App\File;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Folder;

class FileController extends Controller
{
    private $audio_ext = ['mp3', 'ogg', 'mpga'];
    private $video_ext = ['mp4', 'mpeg'];


    public function addFile(Request $request){
    	// if ($request->isMethod('post')) {
    	// 	$data = $request->all();
    	// 	$file = new File;
    	// 	$folder->name = $data['folder_name'];
    	// 	$file->name = $data['file_name'];
    	// 	$file->save();
     //        return redirect('/view-files');

    	// }

        $folders = Folder::where(['parent_id'=>0])->get();
        $folders_dropdown = "<option selected disabled>Select</option>";
        foreach ($folders as $fol) {
            $folders_dropdown .= "<option value'".$fol->id."'>".$fol->name."</option>";
            // $sub_folders = Folder::where(['parent_id'=>$fol->id])->get();
            //     foreach ($sub_folders as $sub_fol) {
            //         $folders_dropdown .= "<option value = '".$sub_fol->id."'>&nbsp;--&nbsp;".$sub_fol->name."</option>";
            //     }
        }
    	return view('add_file')->with(compact('folders_dropdown'));
    }

public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
            'file' => 'required|file|mimes:jpeg,jpg,png,gif|max:2048',
            'audio' =>'nullable|file|mimes:audio/mpeg,mpga,mp3,wav,aac'
        ]); 

         // code for upload 'file'

          if($request->hasFile('file')){
            $uniqueid=uniqid();
            $original_name=$request->file('file')->getClientOriginalName();
            $size=$request->file('file')->getSize();
            $extension=$request->file('file')->getClientOriginalExtension();
            $name=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $imagepath=url('/storage/uploads/files/'.$name);
            $path=$request->file('file')->storeAs('public/uploads/files/',$name);  
           }


        // code for upload 'audio'
        // handle multiple files 
       if(is_array($request->file('audio')))
        {
         $audios=array();
         foreach($request->file('audio') as $file) {
            $uniqueid=uniqid();
            $original_name=$file->getClientOriginalName();
            $size=$file->getSize();
            $extension=$file->getClientOriginalExtension();
            $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
            $audiopath=url('/storage/upload/files/audio/'.$filename);
            $path=$file->storeAs('/upload/files/audio',$filename);
            array_push($audios,$audiopath);
         }
         $all_audios=implode(",",$audios);
     }else{ 
         // handle single file 
         if($request->hasFile('audio')){
         $uniqueid=uniqid();
         $original_name=$request->file('audio')->getClientOriginalName();
         $size=$request->file('audio')->getSize();
         $extension=$request->file('audio')->getClientOriginalExtension();
         $filename=Carbon::now()->format('Ymd').'_'.$uniqueid.'.'.$extension;
         $audiopath=url('/storage/upload/files/audio/'.$filename);
         $path=$file->storeAs('public/upload/files/audio/',$filename);
         $all_audios=$audiopath;
        }
    }

}


    public function viewFiles(Request $request){
    	$files = File::get();
        

    	$files = json_decode(json_encode($files)); 
    	return view('view_files')->compact('files');
    }

    public function surveyTemplate(Request $request){
        return view('survey_template');
    }

    public function reqTable(Request $request){
        return view('req_table');
    }



}
