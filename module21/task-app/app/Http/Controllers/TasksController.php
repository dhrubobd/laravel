<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    function index(Request $request){
        $user = auth()->user();
        //$tasks = Task::where('user_id',$user)->get();
        $tasks = $user->tasks;
        return view('tasks.tasks',['tasks'=>$tasks]);
    }

    function store(Request $request){
        $request->validate([
            'name'=>'required',
            'status'=>'required',
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->status=$request->status;
        $task->user_id = auth()->user()->id;
        $task->save();
        return redirect()->route('tasks');
    }

    function destroy(Request $request, Task $task){
        $user = auth()->user();
        if($task->user_id == $user->id){
            $task->delete();
            Toastr::info('The Task is Deleted!', 'Delete Success', ["positionClass" => "toast-bottom-center"]);
            return redirect()->route('tasks');
        }else{
            Toastr::error('You are not allowed to Delete this task', 'Unauthorized', ["positionClass" => "toast-bottom-center"]);
            //abort(403,"You are not allowed to Delete this task");
        }
    }
}
