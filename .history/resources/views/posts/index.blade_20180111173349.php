@extends('layouts.app')

@section('content')
<h1>index</h1>

    <ul>
        @foreach($posts as $post)
        <div class="image-container">
           <img  height="100" src="{{$post->path}}" alt="">
        </div>

        <div><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></div>
        
        @endforeach
    </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection