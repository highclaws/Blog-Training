@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
        {!! Form::open(['method'=>'POST', 'action'=>'Postscontroller@store', 'files'=>true]) !!}
        <div class="form-group">

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
            <div class="form-group">

            {!! Form::label('content', 'content:') !!}
            {!! Form::text('content', null,['class'=>'form-control']) !!}
            <div class="form-group">
                {!! Form::label('file', 'file:') !!}
                {!! Form::file('file',['class'=>'form-control']) !!}     
            </div>
       
            <div class="form-group">
                {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    <div class="form-group">
    


    </div>
@endsection
 @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach


        </ul>
    </div>
@endif
@section('footer')

<h2>footer</h2>
@endsection