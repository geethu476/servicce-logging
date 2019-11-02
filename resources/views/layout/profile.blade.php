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
    
    <!-- Calendar CSS -->
    <link href="{{url('resources/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
        
    <!-- Data table CSS -->
    <link href="{{url('resources/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Datetimepicker CSS -->
    <link href="{{url('resources/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>

    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
            
    <!-- Custom CSS -->
    <link href="{{url('resources/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css">

    @yield('styles')
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
        
    <!-- Vector Maps JavaScript -->
    <script src="{{url('resources/vendors/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{url('resources/vendors/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{url('resources/dist/js/vectormap-data.js')}}"></script>
    
    <!-- Calender JavaScripts -->
    <script src="{{url('resources/vendors/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{url('resources/vendors/jquery-ui.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{url('resources/dist/js/fullcalendar-data.js')}}"></script>

    <!-- Bootstrap Datetimepicker JavaScript -->
    <script type="text/javascript" src="{{url('resources/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    
    <!-- Counter Animation JavaScript -->
    <script src="{{url('resources/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
    
    <!-- Data table JavaScript -->
    <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="{{url('resources/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
    
    <script src="{{url('resources/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <script src="{{url('resources/dist/js/skills-counter-data.js')}}"></script>
    
    <!-- Morris Charts JavaScript -->
    <script src="{{url('resources/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{url('resources/dist/js/widgets-data.js')}}"></script>
    <script src="{{url('resources/dist/js/morris-data.js')}}"></script>
    
    <!-- Owl JavaScript -->
    <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
    <!-- Switchery JavaScript -->
    <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
    
    <!-- Data table JavaScript -->
    <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        
    <!-- Gallery JavaScript -->
    <script src="{{url('resources/dist/js/isotope.js')}}"></script>
    <script src="{{url('resources/dist/js/lightgallery-all.js')}}"></script>
    <script src="{{url('resources/dist/js/froogaloop2.min.js')}}"></script>
    <script src="{{url('resources/dist/js/gallery-data.js')}}"></script>
    
    <!-- Spectragram JavaScript -->
    <script src="{{url('resources/dist/js/spectragram.min.js')}}"></script>

    <!-- jquery.validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>
    
    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Init JavaScript -->
    <script src="{{url('resources/dist/js/init.js')}}"></script>
    <script src="{{url('resources/dist/js/widgets-data.js')}}"></script>
    
    <!-- custom -->
    <script src="{{url('js/custom.js')}}"></script>

    <script type="text/javascript">
        @if (Session::has('message'))
            $(function(){
                toastr["{{ Session::get('message_type') }}"]("{{ Session::get('message') }}") 
                toastr.options = {
                    "closeButton": false,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                }   
            });
        @endif
    </script>

    @yield('scripts')
</body>

</html>
