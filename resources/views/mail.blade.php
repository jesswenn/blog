@extends('layouts.app') 
@section('content')
	
<h1>Welcome {{ $name }} </h1>
    <form action="send" method="POST">
        {{ csrf_field() }}
        to: <input type="text" name="to">
        message: <textarea name="msg" cols="30" rows="10"></textarea>
        <input type="submit" value="Send">
    </form>

@endsection