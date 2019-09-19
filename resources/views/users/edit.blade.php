  
@extends('layouts.app')

@section('content')
    <h1>Edit User</h1>
    {!! Form::open(['action' => ['UsersController@update',$user->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'Email')}}
            {{Form::text('email',$user->email, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Email'])}}
        </div>
       {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection