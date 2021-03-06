@extends('layouts.app')

@section('title') {{$user->name}} @endsection

@section('content') 
<div class = "container">
	<li>Name: {{$user->name}}</li>
	<li>Email: {{$user->email}}</li>
	<li>Self_introduction: {!!$user->self_introduction!!}</li>
	<br>
	@if($user == auth()->user())
		<button class="btn btn-primary"><a href="/users/{{$user->id}}/edit">edit</a></button><br>
	@else
<button class="btn btn-primary"><a href="/users/visitHome?userId={{$user->id}}" style="color:white">Go to his/her homepage</a></button><br> <br>
<button class="btn btn-primary"><a href="/users/visitHome?userId={{$user->id}}" style="color:white">Chat with him/her!</a></button><br>
	@endif
</div>
@endsection