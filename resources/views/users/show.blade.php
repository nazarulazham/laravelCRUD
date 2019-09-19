@extends('layouts.app')

@section('content')
    <a href="/users" class="btn btn-default">Go Back</a>
    <h1>{{$user->title}}</h1>

    <br><br>
    <div>
        {!!$user->body!!}
    </div>
    <hr>
    <small>Name  {{$user->name}}</small>
    <br/>
    <small>Email  {{$user->email}}</small>
    <hr>

      
            <a href="/users/{{$user->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}

@endsection