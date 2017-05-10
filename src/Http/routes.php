<?php
// Route::get('todos',function(){
// 	return "Here goes the todo list";
// });


Route::get('todos','Demo\Todo\Http\Controllers\DemoTodoController@showTodos');

?>