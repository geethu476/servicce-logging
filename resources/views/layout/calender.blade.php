<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        @include('include.meta')
        
        <!-- Calendar CSS -->
        <link href="{{url('resources/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Custom CSS -->
        <link href="{{url('resources/dist/css/style.css')}}" rel="stylesheet" type="text/css">
            <link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!--Preloader-->

        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->
        <div class="wrapper theme-4-active pimary-color-red">
            @include('include.nav')
            @yield('content')
        
        </div>
        <!-- /#wrapper -->
        
        <!-- JavaScript -->
        
        <!-- jQuery -->
        <script src="{{url('resources/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        
        <!-- Calender JavaScripts -->
        <script src="{{url('resources/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{url('resources/vendors/jquery-ui.min.js')}}"></script>
        <script src="{{url('resources/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
        <script src="{{url('resources/dist/js/fullcalendar-data.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
        
        <!-- Owl JavaScript -->
        <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
        
        <!-- Switchery JavaScript -->
        <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
        
        <!-- Fancy Dropdown JS -->
        <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
        <!-- Init JavaScript -->
        <script src="{{url('resources/dist/js/init.js')}}"></script>
        
    </body>
</html>