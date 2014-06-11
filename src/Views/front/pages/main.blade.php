@extends ('front.layouts.master')
@section('title', 'Skyy')

@section('signature', $is_mobile)

@section('content')
   <div class="row">
      <div class="col-md-12">
         <h2 class="page-header text-center">SIX DJ SHOWS. SIX SESSIONS.</h2>
      </div>
   </div>
   <div class="row">
      <div class="column" style="width: 92%; margin: 0 auto;">
         <?php $i = 0; ?>
         @foreach ($shows as $show)
            <?php $i += 1; ?>
            @if ($show['is_live'])
               <div class="media-is-live clearfix">
                  <img src="{{$show['main_image']}}" alt="" class="pull-left">
                  <div class="right-content pull-right">
                     <div class="knockout">
                        <p>{{$show['show_date']}} - {{$show['show_location']}}</p>
                        <h4 class="media-heading">{{$show['headliner']}}</h4>
                        @if ($show['supporting_cast'] !== '')
                           <h5>{{$show['supporting_cast']}}</h5>
                        @endif
                        <p>{{$show['show_time']}}</p>
                     </div>
                     <p class="description">{{$show['description']}}</p>
                  </div>
                  <ul class="list-inline bottom-buttons">
                     <li><a href="{{$show['show_link']}}" class="btn-watch">Watch The Show</a></li>
                     @if (! $show['is_over'])
                     <li><a href="{{$show['save_the_date']}}" class="btn-save">Save The Date</a></li>
                     @endif
                  </ul>
               </div>
            @else
            <div class="media-no-data clearfix">
               <div class="show-number pull-left">
                  SHOW <br>#{{$i}}
               </div>
               <div class="pull-right">
                  <div class="show-content row">
                     <div class="col-md-8">
                        <h4 class="media-heading">{{$show['headliner']}}</h4>
                        @if ($show['supporting_cast'] !== '')
                           <h5>{{$show['supporting_cast']}}</h5>
                        @endif
                        <p class="show-location">{{$show['show_location']}}</p>
                     </div>
                     <div class="col-md-4">
                        <p class="datetime text-right big">
                           {{$show['show_date']}}<br>
                           {{$show['show_time']}}
                       </p>
                        <p class="datetime text-left small">
                           {{$show['show_date']}}
                           @if ($show['show_time'] !== '' && !is_null($show['show_time']))
                              &#124;
                              {{$show['show_time']}}
                           @endif
                       </p>
                     </div>
                  </div>
               </div>
            </div>
            @endif
         @endforeach
      </div>
   </div>
@stop
