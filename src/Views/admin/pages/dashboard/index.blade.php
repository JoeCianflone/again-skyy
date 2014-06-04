@extends('admin.layouts.master')
@section('page-title', 'Skyy | Again Dashboard')
@section('signature', 'dashboard')

@section('main-content')
   <h1 class="page-header">Dashboard - View All Shows</h1>
   {{ link_to_route('dashboard.create', 'Add New', '', ['class' => 'btn btn-primary']) }}
   @if (count($shows) <= 0)
      <p><br><strong>Sorry, No shows scheduled yet...</strong></p>
   @else
    <table class="table table-striped">
      <thead>
         <tr>
            <th>ID</th>
            <th>Headline</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
         </tr>
      </thead>
      <tbody>
      @foreach ($shows as $show)
         <tr>
            <td>{{ $show['id']}} </td>
            <td>{{ $show['headliner']}} </td>
            <td>{{ link_to_route('dashboard.edit', 'Edit', ["showId" => $show['id']], "") }}</td>
            <td>
               {{Form::open(['route' => ['dashboard.delete', $show['id']], 'method' => 'delete']) }}
                  <button type="submit" class="btn btn-danger btn-xs">Delete</button>
               {{Form::close()}}


            </td>
         </tr>
      @endforeach

      </tbody>
   </table>
   @endif


@stop
