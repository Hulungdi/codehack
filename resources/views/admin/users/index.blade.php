@extends('layouts.admin')



@section('content')

<h2>Users</h2>

@if(Session::has('deleted_user'))
    <p class="bg-danger">{{session('deleted_user')}}</p>
@endif
@if(Session::has('create_msg'))
    <p class="bg-success">{{session('create_msg')}}</p>
@endif
<table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Photo</th>
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
              <td><img src="{{$user->photo ? $user->photo->file : "No user photo"}}" width="70px" height="50px"></td>
              <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role['name']}}</td>
            <th>{{$user->is_active==1 ? 'Active' : 'Not Active'}}</th>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
        @endforeach
    @endif()
    </tbody>
</table>

@stop