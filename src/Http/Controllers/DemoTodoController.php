<?php


namespace Demo\Todo\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Demo\Todo\Models\DemoTodoModel;

class DemoTodoController extends Controller
{
    //
    public function showTodos(){
    	$todos = DemoTodoModel::orderBy('id','desc')->get();
        return view('demo-todo::list')->with('todos',$todos);
    }
}
