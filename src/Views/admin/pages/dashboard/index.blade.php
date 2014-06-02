@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Dashboard')
@section('signature', 'dashboard')

@section('main-content')
   <h1 class="page-header">Dashboard - View All Shows</h1>
   {{ link_to_route('dashboard.create', 'Add New', '', ['class' => 'btn btn-primary']) }}
   <table class="table table-striped">
      <thead>
         <tr>
            <th>#</th>
            <th>Headline</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
         </tr>
      </thead>
      <tbody>
      <tr>
         <td>1</td>
         <td>Headline</td>
         <td>Edit</td>
         <td>Delete</td>
      </tr>
      </tbody>
   </table>

@stop
