@extends('layouts.admin')


@section('content')

    <h3>Edit Profile</h3>
@if(Session::has('edit_msg'))
    <p class="bg-primary">{{session('edit_msg')}}</p>
@endif
    <div class="row">
        @include('includes.form_error.form_error')
    </div>

    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file : "test"}}" width="150px" height="50px" alt="" class="img-responsive img-rounded">

    </div>

    <div class="col-sm-9">

        {!!Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true])!!}

        <div class="form-group">
            {!!Form::label('name', 'Username:')!!}
            {!!Form::text('name', null, ['class'=>'form-control'])!!}

            {!!Form::label('email', 'Email:')!!}
            {!!Form::text('email', null, ['class'=>'form-control'])!!}

            {!!Form::label('password', 'Password:')!!}
            {!!Form::password('password', ['class'=>'form-control'])!!}

            {!!Form::label('role_id', 'Role:')!!}
            {!!Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control'])!!}

            {!!Form::label('status', 'Status:')!!}
            {!!Form::select('is_active', array(1=>'Active',0=>'Not Active'), null, ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('photo_id', 'Upload Photo:')!!}
            {!!Form::file('photo_id', null, ['class'=>'form-control'])!!}
        </div>

        {!!Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6'])!!}
        {!!Form::close()!!}


        {!!Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])!!}
            <div class="form-group">
                {!!Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6'])!!}
            </div>

        {!!Form::close()!!}



    </div>
@stop()