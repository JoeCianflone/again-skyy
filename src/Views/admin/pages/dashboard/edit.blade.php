@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Dashboard')
@section('signature', 'dashboard')

@section('main-content')
   <h1 class="page-header">Dashboard - Edit Show</h1>
   <div class="row">
      {{ Form::open(['route' => ['dashboard.update', $show['id']], 'files' => true, 'method' => 'put', 'class' =>'form-signin col-md-6', 'role' => 'form']) }}
         <div class="form-group clearfix">
            <div class="pull-left">
               <label for="main_image">Upload An Image</label>
               <input type="file" name="main_image">
            </div>
            @if ($show['main_image'] !== '' && !is_null($show['main_image']))
               <p class="text-right"><strong>Preview: </strong></p>
               <img class="pull-right" src="{{$show['main_image']}}" alt="Preview" height="150">
            @endif
         </div>
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
            <label for="show_link">Show Link</label>
            {{ Form::text("show_link", $show["show_link"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label for="save_the_date">Save the date</label>
            {{ Form::text("save_the_date", $show["save_the_date"], ["class" => "form-control"]) }}
         </div>
         <div class="form-group">
            <label class="checkbox-inline">
               {{ Form::checkbox('is_live', 'true', $show["is_live"]) }}
               Make active?
            </label>
            <button class="btn btn-sm btn-primary pull-right" type="submit">Update the Show</button>
         </div>
      {{ Form::close() }}
   </div>

@stop
