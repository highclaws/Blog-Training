@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <div class="form-group">
        {{--  <form method="post" action="/posts">  --}}
        {!! Form::open(['method'=>'POST', 'action'=>'Postscontroller@store']) !!}
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null,['class'=>'form-control']) !!}
        {!! Form::label('content', 'content:') !!}
        {!! Form::text('content', null,['class'=>'form-control']) !!}
            {{--  <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name="title" value="">
            <input type="text" name="content" value="">
            <input type="submit" name="submit" >  --}}
        
            
        {!! Form::close() !!}
    </div>
    <div class="form-group">
        {!! Form::model($post, ['method'=>'POST', 'action'=>['Postscontroller@store']]) !!}
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}

    </div>
    {{--  </form>      --}}
@endsection
@section('footer')

<h2>footer</h2>
@endsection