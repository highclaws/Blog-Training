@extends('layouts.app')

@section('content')
<h1>Ready</h1>

    <ul>
            @foreach($posts as $post)

            <h1>{{$post->title}}</h1>     
            @endforeach   
    </ul>

@endsection
@section('footer')

<h2>footer</h2>
@endsection