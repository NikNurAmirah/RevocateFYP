<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;

class FolderController extends Controller
{
    public function addFolder(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		$folder = new Folder;
    		$folder->name = $data['folder_name'];
    		$folder->save();
            return redirect('/view-folders')->with('flash_message_success','Folders Created Successfully!');

    	}
    	return view('add_folder');
    }

    public function editFolder(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Folder::where(['id'=>$id])->update(['name'=>$data['folder_name']]);
            return redirect('/view-folders');
        }
        $folderDetails = Folder::where(['id'=>$id])->first();
        return view('edit_folder')->with(compact('folderDetails'));
    }

    public function deleteFolder(Request $request, $id = null){
        if(!empty($id)){
            Folder::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }

    public function viewFolders(){

        //$folders = Folder::findOrFail($id);
        $folders = Folder::get();
        //$folders = Folder::get();
        $folders = json_decode(json_encode($folders));       
    	return view('view_folders', compact('folders'));
    }


}
