<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @include('include.meta')
        
        <!-- Bootstrap Colorpicker CSS -->
        <link href="{{url('resources/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap Datetimepicker CSS -->
        <link href="{{url('resources/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap Daterangepicker CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css"/>
         
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
        
        <!-- JavaScripts -->
        
        <!-- jQuery -->
        <script src="{{url('resources/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        
        <!-- Moment JavaScript -->
        <script type="text/javascript" src="{{url('resources/vendors/bower_components/moment/min/moment-with-locales.min.js')}}"></script>
        
        <!-- Bootstrap Colorpicker JavaScript -->
        <script src="{{url('resources/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
                
        <!-- Bootstrap Datetimepicker JavaScript -->
        <script type="text/javascript" src="{{url('resources/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
        
        <!-- Bootstrap Daterangepicker JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        
        <!-- Form Picker Init JavaScript -->
        <script src="{{url('resources/dist/js/form-picker-data.js')}}"></script>
        
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