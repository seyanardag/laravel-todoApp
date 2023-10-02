<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index() {
        $todo = Todo::all();
        // return view('welcome')->with('todos', $todo);
        return view('index',['todos'=>$todo]);
    }

    public function store() {
      $data = request()->all();

      $todo = new Todo();
      $todo->todoItem = $data['todo'];
      $todo->description = $data['description'];
      $todo->save();

      return redirect('/');
    }

    public function delete($todoid){

      $todo=Todo::find($todoid);
      $todo->delete();
      return redirect('/');
    }

    public function switchDone($todoid){
      $todo = Todo::find($todoid);

      $todo->isDone = $todo->isDone == true ? false : true;

      // if($todo->isDone==true) {
      //   $todo->isDone=false;
      // } else {
      //   $todo->isDone=true;
      // };

      $todo->save();

      return redirect('/');
    }

    public function edit($todoid){
      $todo = Todo::find($todoid);

      return view('editpage', ['todo'=>$todo]);
    }

    public function edited($todoid){
      $todo=Todo::find($todoid);
      $todo->todoItem = request('todo');
      $todo->description = request('description');
      $todo->save();

      return redirect('/');
    }

}
