<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::where('user_id', auth()->user()->id)->orderBy('due_date','asc')->get(); 
        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required|min:1|max:255',
            'due_date' => 'required|date_format:d/m/Y'
        ]);

        //Create Task
        $task = new Task;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->user_id = auth()->user()->id;
        $task->save();

        return redirect('/tasks')->with('success', 'Task created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        //Check for correct user
        if(auth()->user()->id !== $task->user_id){
            return redirect('/tasks')->with('error', 'Unauthorized page');
        }

        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::find($id);

        //Check for correct user
        if(auth()->user()->id !== $task->user_id){
            return redirect('/tasks')->with('error', 'Unauthorized page');
        }

        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required|min:1|max:255',
            'due_date' => 'required|date_format:d/m/Y'
        ]);

        //Create Task
        $task = Task::find($id);

        //Check for correct user
        if(auth()->user()->id !== $task->user_id){
            return redirect('/tasks')->with('error', 'Unauthorized page');
        }

        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->save();

        return redirect('/tasks')->with('success', 'Task updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        //Check for correct user
        if(auth()->user()->id !== $task->user_id){
            return redirect('/tasks')->with('error', 'Unauthorized page');
        }

        $task->delete();

       return redirect('/tasks')->with('success', 'Task deleted');
    }
}
