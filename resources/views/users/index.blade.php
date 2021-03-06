@extends('base')

@section('content')

<div class="float-right">
    <a href="{{url('/users/create')}}" class="btn btn-primary">
    &#x2719;  Add New User
    </a>
</div>

<h1>List of Users</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->email}}</td>
            <td><a href="{{url('/users/edit', ['id'=>$u])}}" class="btn btn-info btn-sm" style="margin-left: 30%;">&#x270E;</a></td>
        </tr>

        @endforeach
    </tbody>
</table>

@stop
