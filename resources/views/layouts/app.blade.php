<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('partials.styles')
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('/images/favicon.png') }}" rel="shortcut icon">
	<style>
	[data-tooltip] {
	  position: relative;
	  font-weight: bold;
	}

	[data-tooltip]:after {
	  display: none;
	  position: absolute;
	  top: -5px;
	  padding: 5px;
	  border-radius: 3px;
	  left: calc(100% + 2px);
	  content: attr(data-tooltip);
	  white-space: nowrap;
	  background-color: #674ea7;
	  color: White;
	}

	[data-tooltip]:hover:after {
	  display: block;
	}
	
	</style>
	
	
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-header-fixed page-full-width page-sidebar-hide page-sidebar-closed-hide-logo">

<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top" style="background-color:#674ea7">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
      <div class="page-logo">
            <a href="{{ url('/') }}">
                <img src = "{{ asset('/images/logorealoficial.png') }}" style= "height: 50px; position: fixed; left: 2%; top: 1%; z-index: 100000;"/>
            </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top">

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu" >
                <ul class="nav navbar-nav pull-right">
                    <li class="separator hide"></li>
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <span class="username username-hide-on-mobile" style="color:#FFA500; font-size:18px; font-family: 'Raleway', sans-serif;"> <i class="fa fa-user"></i>{{ Auth::user()->name }} </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
							
			
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();" style="font-size:18px; font-family: 'Raleway', sans-serif">
                                    <i class="fa fa-power-off"></i> <strong>Sair </strong>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->

</div>

<div class="clearfix">
</div>

<div class="page-container">
    <div class="page-content-wrapper">
        <div class="page-content">

            @yield('content')

        </div>
    </div>
</div>

<div class="page-footer">
    <div class="page-footer-inner">
        {{ date('Y') }} &copy; {{ config('app.name') }}
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
		
    </div>
</div>

@include('partials.scripts')
</body>
</html>