@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Login')
@section('signature', 'login')

@section('main-content')
   <div class="row">
      {{ Form::open(['route' => 'login.attempt', 'method' => 'post', 'class' =>'form-signin col-md-4 col-md-offset-4', 'role' => 'form']) }}
         <h2 class="form-signin-heading">Please sign in</h2>
         <div class="form-group">
            {{ Form::email("email", Input::old('email'), ["placeholder" => "Email Address",  "class" => "form-control", "required"=>"required", "autofocus"=>"autofocus"]) }}
         </div>
         <div class="form-group">
            {{ Form::password("password", ["placeholder" => "Password",  "class" => "form-control", "required"=>"required"]) }}
         </div>
         <div class="form-group">
            <button class="btn btn-sm btn-primary" type="submit">Sign in</button>
         </div>
      {{ Form::close() }}
   </div>
@stop




