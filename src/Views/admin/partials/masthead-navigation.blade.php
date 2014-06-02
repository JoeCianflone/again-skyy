@if (Auth::check())
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">Skyy &#124; Admin Panel</a>
      </div>
      <div class="navbar-collapse collapse pull-right">
         <ul class="nav navbar-nav">
            <li class="active"><a href="#">Dashboard</a></li>
            <li><a href="#">Users Admin</a></li>
            <li><a href="#">Logout</a></li>
         </ul>
      </div>
   </div>
</div>
@endif
