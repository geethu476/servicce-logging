<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @include('include.meta')
    
    <!-- Morris Charts CSS -->
    <link href="{{url('resources/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- vector map CSS -->
    <link href="{{url('resources/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- Data table CSS -->
    <link href="{{url('resources/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- Chartist CSS -->
    <link href="{{url('resources/vendors/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <link href="{{url('resources/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    
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
    
    <!-- Counter Animation JavaScript -->
    <script src="{{url('resources/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
    
    <!-- Data table JavaScript -->
    <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/dist/js/productorders-data.js')}}"></script>
    
    <!-- Owl JavaScript -->
    <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
    <!-- Switchery JavaScript -->
    <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="{{url('resources/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="{{url('resources/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    
    <!-- Chartist JavaScript -->
    <script src="{{url('resources/vendors/bower_components/chartist/dist/chartist.min.js')}}"></script>
    <script src="{{url('resources/dist/js/chartist-data.js')}}"></script>
    
    <!-- ChartJS JavaScript -->
    <script src="{{url('resources/vendors/chart.js/Chart.min.js')}}"></script>
    
    <script src="{{url('resources/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{url('resources/dist/js/init.js')}}"></script>
    <script src="{{url('resources/dist/js/dashboard3-data.js')}}"></script>
</body>
</html>
