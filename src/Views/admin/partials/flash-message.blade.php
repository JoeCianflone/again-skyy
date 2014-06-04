@if (Session::has('flash_notification') && Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('partials/_modal', ['modalClass' => 'flash-modal', 'title' => 'Notice', 'body' => Session::get('flash_notification.message')])
    @else
        <div class="flash-message alert alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><span class="fa fa-times"></span></button>
            @if (Session::get('flash_notification.level') === 'info')
               <strong><span class="fa fa-info-circle embiggin"></span></strong>
            @elseif (Session::get('flash_notification.level') === 'danger')
               <span class="fa fa-exclamation-triangle embiggin"></span>
            @else
               <span class="fa fa-check-circle embiggin"></span>
            @endif

            {{ Session::get('flash_notification.message') }}
        </div>
    @endif
@endif
