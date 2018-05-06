<?php
/**
 * Created by PhpStorm.
 * User: Hulungdi
 * Date: 5/6/2018
 * Time: 10:58 PM
 */
?>
@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
