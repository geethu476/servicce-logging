<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            @include('include.meta')
        <!-- vector map CSS -->
        <link href="{{url('resources/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Footable CSS -->
        <link href="{{url('resources/vendors/bower_components/FooTable/compiled/footable.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->
        <link href="{{url('resources/dist/css/style.css')}}" rel="stylesheet" type="text/css">
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
        
        <!-- Piety JavaScript -->
        <script src="{{url('storagevendors/bower_components/peity/jquery.peity.min.js')}}"></script>
        <script src="{{url('storagedist/js/peity-data.js')}}"></script>

        <!-- Data table JavaScript -->
        <script src="{{url('resources/vendors/bower_components/moment/min/moment.min.js')}}"></script>
        <script src="{{url('resources/vendors/bower_components/FooTable/compiled/footable.min.js')}}" type="text/javascript"></script>
        <script src="{{url('resources/dist/js/footable-data.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
        <!-- Fancy Dropdown JS -->
        <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
        
        <!-- Owl JavaScript -->
        <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
        <!-- Switchery JavaScript -->
        <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
        
        <!-- Init JavaScript -->
        <script src="{{url('resources/dist/js/init.js')}}"></script>


        

        
    </body>
</html>