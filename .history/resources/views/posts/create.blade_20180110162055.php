@extends('layouts.app')

@section('content')
	
<form method="post" action="/posts">
    <input type="text" name="title" placeholder="enter title" value="{{ csrf_token() }}">

    <input type="submit" name="submit">
</form>    
@endsection

@section('footer')

<h2>footer</h2>
@endsection