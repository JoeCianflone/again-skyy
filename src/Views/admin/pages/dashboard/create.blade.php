@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Dashboard')
@section('signature', 'dashboard')

@section('main-content')
   <h1 class="page-header">Dashboard - Create New</h1>
   <div class="row">
      {{ Form::open(['route' => 'dashboard.store', 'files'=>true, 'method' => 'post', 'class' =>'form-signin col-md-6', 'role' => 'form']) }}
         <div class="form-group">
            <label for="main_image">Upload An Image</label>
            <input type="file" name="main_image">
         </div>
         <div class="form-group">
            <label for="headliner">Headliner</label>
            {{ Form::text("headliner", Input::old('headliner'), ["class" => "form-control", "autofocus"=>"autofocus"]) }}
         </div>
         <div class="form-group">
            <label for="description">Description</label>
            {{ Form::textarea("description", Input::old('description'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_date">Show Date</label>
            {{ Form::text("show_date", Input::old('show_date'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_location">Show Location</label>
            {{ Form::text("show_location", Input::old('show_location'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_time">Show Time</label>
            {{ Form::text("show_time", Input::old('show_time'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="supporting_cast">Supporting Cast</label>
            {{ Form::text("supporting_cast", Input::old('supporting_cast'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="email">Show Link</label>
            {{ Form::text("headline", Input::old('headline'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_link">Save the date</label>
            {{ Form::text("show_link", Input::old('show_link'), ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label class="checkbox-inline">
               <input type="checkbox" id="is_live" name="is_live" value="true"> Make active?
            </label>
            <button class="btn btn-sm btn-primary pull-right" type="submit">Create This Show</button>
         </div>
      {{ Form::close() }}
   </div>

@stop
