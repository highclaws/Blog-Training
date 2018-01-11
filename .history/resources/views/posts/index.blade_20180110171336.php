@extends('layouts.app')

@section('content')

    <ul>
        @foreach($posts as $post)

        <li> {{$post->title}}</li>
        
        @endforeach
    </ul>
    
@endsection
@section('footer')

<h2>footer</h2>
@endsection