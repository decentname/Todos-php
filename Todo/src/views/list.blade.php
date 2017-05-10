<h1>{{config('demo-config.todo_heading')}}</h1>
<ul>
	@foreach($todos as $todo)
		<li>{{$todo->todo}}</li>
	@endforeach
</ul>