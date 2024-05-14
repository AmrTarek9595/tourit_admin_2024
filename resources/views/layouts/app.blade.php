
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="description" content="">

<meta name="msapplication-tap-highlight" content="no">

<link href="/css/main.css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../src/richtext.min.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="/src/jquery.richtext.js"></script>

</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
<div class="app-header header-shadow">

@if(Auth::User())
<div class="app-header__menu">

</div> 
<div class="app-header__content">




</div>

<div class="header-btn-lg pr-0">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left">
<div class="btn-group">
<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
<img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
<i class="fa fa-angle-down ml-2 opacity-8"></i>
</a>
<div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
<div class="dropdown-menu-header">
<div class="dropdown-menu-header-inner bg-info">
<div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
<div class="menu-header-content text-left">
<div class="widget-content p-0">
<div class="widget-content-wrapper">
<div class="widget-content-left mr-3">
<img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
</div>
<div class="widget-content-left">
    @if(Auth::User())
<div class="widget-heading">{{Auth::user()->name}}</div>
<div class="widget-subheading opacity-8">{{Auth::user()->email}}</div>
@endif
</div>
<div class="widget-content-right mr-2">
    <form method="post" action="/logout">
        @csrf
<button type="submit" class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
<div class="widget-content-left  ml-3 header-user-info">
<div class="widget-heading"> {{Auth::user()->name}}</div>

@if(Auth::User()->type == 0 )
<div class="widget-subheading opacity-8">You Are: Moderator</div>
@else
<div class="widget-subheading opacity-8">You Are: Admin</div>
@endif

</div>

</div>
</div>
</div>

</div>
</div>


</div> <div class="app-main">
<div class="app-sidebar sidebar-shadow">
<div class="app-header__logo">
<div class="logo-src"></div>
<div class="header__pane ml-auto">
<div>
<button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
</div>
<div class="app-header__mobile-menu">
<div>
<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>
</div>
</div>
<div class="app-header__menu">
<span>
<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
<span class="btn-icon-wrapper">
<i class="fa fa-ellipsis-v fa-w-6"></i>
</span>
</button>
</span>
</div> <div class="scrollbar-sidebar">
<div class="app-sidebar__inner">
<ul class="vertical-nav-menu">
<li class="app-sidebar__heading">Menu</li>
<li class=" {{ Request::is(['home','addNewAdminModerator','removeUsersView']) ? 'mm-active' : 'sss' }}">
<a href="#">
<i class="metismenu-icon pe-7s-rocket"></i>Dashboards
<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
</a>
<ul>
<li>
<a href="/home" class= "{{ Request::is('home') ? 'mm-active' : 'sss' }}">
<i class="metismenu-icon"></i>View Admins&Moderators
</a>
</li>
<li>
<a href="/addNewAdminModerator" class="{{ Request::is('addNewAdminModerator') ? 'mm-active' : 'sss' }}">
<i class="metismenu-icon"></i>Add Admins&Moderators
</a>
</li>
<li>
<a href="/removeUsersView"  class="{{ Request::is('removeUsersView') ? 'mm-active' : 'sss' }}">
<i class="metismenu-icon"></i>
Remove Admins&Moderators
</a>
</li>


</ul>
</li>
<li class=" {{ Request::is(['return_home_input_data','return_destination_view','return_add_destination_view']) ? 'mm-active' : 'sss' }}">
<a href="#">
<i class="metismenu-icon pe-7s-browser"></i>Pages
<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
</a>
<ul>
<li>
<a href="/return_home_input_data" class=" {{ Request::is('return_home_input_data') ? 'mm-active' : 'sss' }}">

<i class="metismenu-icon"></i> Home Page
</a>
</li>
<li>
<a href="/return_destination_view" class=" {{ Request::is('return_destination_view') ? 'mm-active' : 'sss' }}">
<i class="metismenu-icon"></i>Destinations
</a>
</li>
<li>
<a href="/return_add_destination_view" class=" {{ Request::is('return_add_destination_view') ? 'mm-active' : 'sss' }}">
<i class="metismenu-icon"></i>Add Destinations Images
</a>
</li>
<li>
<a href="pages-register.html">
<i class="metismenu-icon"></i>Reservations
</a>
</li>



</ul>
</li>





</ul>
</div>
@endif
</div>

</div>



@yield('content')

</div>





<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script>
        $(document).ready(function() {
            $('.test_area').richText();
            $('.test_ar').richText();
            $('.test_are').richText();
        });

        </script>
<script type="text/javascript" src="/js/main.js"></script>
</body>
</body>
</html>


