@extends('layouts.admin')



@section('content')

<h2>Users</h2>

<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
          <th>Role ID</th>
          <th>Active</th>
        <th>Created Date</th>
        <th>Updated Date</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        @foreach($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <th>{{$user->is_active==1 ? 'Active' : 'Not Active'}}</th>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
    @endif()
    </tbody>
</table>

@stop