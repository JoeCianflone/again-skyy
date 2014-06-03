@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Dashboard')
@section('signature', 'dashboard')

@section('main-content')
   <h1 class="page-header">Dashboard - Edit Show</h1>
   <div class="row">
      {{ Form::open(['route' => 'dashboard.store', 'method' => 'post', 'class' =>'form-signin col-md-6', 'role' => 'form']) }}
         <button class="btn btn-sm btn-primary pull-right" type="submit">Update the Show</button>
         <p>Image Upload here...</p>
         <div class="form-group">
            <label for="headliner">Headliner</label>
            {{ Form::text("headliner", $show["headliner"], ["class" => "form-control", "autofocus"=>"autofocus"]) }}
         </div>
         <div class="form-group">
            <label for="description">Description</label>
            {{ Form::textarea("description", $show["description"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_date">Show Date</label>
            {{ Form::text("show_date", $show["show_date"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_location">Show Location</label>
            {{ Form::text("show_location", $show["show_location"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_time">Show Time</label>
            {{ Form::text("show_time", $show["show_time"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="supporting_cast">Supporting Cast</label>
            {{ Form::text("supporting_cast", $show["supporting_cast"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="email">Show Link</label>
            {{ Form::text("headline", $show["show_link"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="show_link">Save the date</label>
            {{ Form::text("show_link", $show["save_the_date"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label class="checkbox-inline">
               <input type="checkbox" id="is_live" name="is_live" value="option1"> Make active?
            </label>
            <button class="btn btn-sm btn-primary pull-right" type="submit">Update the Show</button>
         </div>
      {{ Form::close() }}
   </div>

@stop
