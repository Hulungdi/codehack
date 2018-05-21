@extends('layouts.admin')


@section('content')

    <h3>Edit Profile</h3>

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

        {!!Form::submit('Update', ['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
    </div>
@stop()