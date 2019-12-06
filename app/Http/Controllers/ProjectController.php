<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    public function addProject(Request $request){
    	if ($request->isMethod('post')) {
    		$data = $request->all();
    		//echo "<pre>"; print_r($data); die;
    		$project = new Project;
    		$project->name = $data['project_name'];
            // $project->parent_id = $data['parent_id'];
    		$project->save();
            return redirect('/view-projects')->with('flash_message_success','Projects Created Successfully!');

    	}
        $projects = Project::where(['parent_id'=>0])->get();
        
    	return view('add_project')->with(compact('projects'));
    }

    public function editProject(Request $request, $id = null){
        if($request->isMethod('post')){
            $data = $request->all();
            Project::where(['id'=>$id])->update(['name'=>$data['project_name']]);
            return redirect('/view-projects');
        }
        $projectDetails = Project::where(['id'=>$id])->first();
        return view('edit_project')->with(compact('projectDetails'));
    }

    public function deleteProject(Request $request, $id = null){
        if(!empty($id)){
            Project::where(['id'=>$id])->delete();
            return redirect()->back();
        }
    }

    public function viewProjects(){

        //$projects = Project::findOrFail($id);
        $projects = Project::get();
        //$projects = Project::get();
        $projects = json_decode(json_encode($projects));       
    	return view('view_projects', compact('projects'));
    }

    public function showProject(){
        return view('show_project');


    }

}
