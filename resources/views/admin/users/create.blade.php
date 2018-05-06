@extends('layouts.admin')





@section('content')

<h3>Create users</h3>

@include('includes.form_error.form_error')

{!!Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','files'=>true])!!}

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
        {!!Form::select('is_active', array(1=>'Active',0=>'Not Active'), 0, ['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('photo_id', 'Upload:')!!}
        {!!Form::file('file', null, ['class'=>'form-control'])!!}
    </div>

    {!!Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@stop()