@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Login')
@section('signature', 'login')

@section('main-content')
   <div class="row">
      <form class="form-signin col-md-4 col-md-offset-4 " role="form">
         <h2 class="form-signin-heading">Please sign in</h2>
         <div class="form-group">
            <input type="email" class="form-control" placeholder="Email address" required autofocus>
         </div>
         <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required>
         </div>
         <div class="form-group">
            <button class="btn btn-sm btn-primary" type="submit">Sign in</button>
         </div>
      </form>
   </div>
@stop




