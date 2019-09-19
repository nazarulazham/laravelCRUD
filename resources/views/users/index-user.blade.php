@extends('layouts.app')

@section('content')
    <h1>All User</h1>
    @if(count($users) > 0)
        @foreach($users as $user)
            <div class="well">
                <div class="row">

                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/users/{{$user->id}}">{{$user->id}}</a></h3>
                        <small>Name:{{$user->name}} </small>
                        <br/>
                        <small>email:{{$user->email}} </small>
                        <br/>
                        <hr/>


                    </div>
                </div>
            </div>
        @endforeach

    @else
        <p>No posts found</p>
    @endif
@endsection