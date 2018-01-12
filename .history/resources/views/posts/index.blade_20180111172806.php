@extends('layouts.app')

@section('content')
<h1>index</h1>

    <ul>
        @foreach($posts as $post)
        <div class="image-container">
           <img src="/images/{{$post->path}}"
        </div>
        <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
        
        @endforeach
    </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection