@extends('layouts.app')

@section('content')

    <div>
        @foreach($posts as $post)
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        
        @endforeach
    </div>

@endsection
@section('footer')

<h2>footer</h2>
@endsection