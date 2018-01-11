@extends('layouts.app')

@section('content')

    <ul>
        @foreach($posts as $post)
 <h1>{{$post->title}}</h1>
        <li>{{$post->content}}</li>
        
        @endforeach
    </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection