
@extends('layout.master')
@section('title')
    Users
@endsection
@section('content')
    <div class="container">
        <h1>Users</h1>
        @foreach ($data as $users)
            @foreach($users as $u)
            <ul>
                <li>{{$data}}</li>
            </ul>
            @endforeach
        @endforeach
        
    </div>   
@endsection





   

