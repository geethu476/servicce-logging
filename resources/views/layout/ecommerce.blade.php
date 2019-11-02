<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    @include('include.meta')
    
    
    <!-- Morris Charts CSS -->
    <link href="{{url('resources/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- Data table CSS -->
    <link href="{{url('resources/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <link href="{{url('resources/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    
    <!-- bootstrap-select CSS -->
    <link href="{{url('resources/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>    
    
    <!-- Bootstrap Switches CSS -->
    <link href="{{url('resources/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
        
    <!-- switchery CSS -->
    <link href="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <!--alerts CSS -->
    <link href="{{url('resources/vendors/bower_components/sweetalert/dist/sweetalert.css')}}" rel="stylesheet" type="text/css">
    
    <!-- Calendar CSS -->
    <link href="{{url('resources/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>

    <!-- bootstrap-datepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />

    <!-- toastr -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    
    <!-- Custom CSS -->
    <link href="{{url('resources/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css">

    @yield('styles')
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-6-active pimary-color-red">

        @include('include.nav')

        @yield('content')

    </div>
    <!-- /#wrapper -->
    
    <!-- JavaScript -->
    
    <!-- jQuery -->
    <script src="{{url('resources/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('resources/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    
    <!-- Data table JavaScript -->
    <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <!--- export -->
    <script src="{{url('js/dataTable.button.min.js')}}"></script>
    <script src="{{url('js/buttonflash.min.js')}}"></script>
    <script src="{{url('js/jszip.min.js')}}"></script>
    <script src="{{url('js/pdfmake.min.js')}}"></script>
    <script src="{{url('js/vfs_fonts.js')}}"></script>
    <script src="{{url('js/buttons.html5.min.js')}}"></script>
    <script src="{{url('js/buttons.print.min.js')}}"></script>
    
    <!-- Slimscroll JavaScript -->
    <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
    <!-- simpleWeather JavaScript -->
    <script src="{{url('resources/vendors/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{url('resources/dist/js/simpleweather-data.js')}}"></script>
    
    <!-- Progressbar Animation JavaScript -->
    <script src="{{url('resources/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
    
    <!-- Fancy Dropdown JS -->
    <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    
    <!-- Sparkline JavaScript -->
    <script src="{{url('resources/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
    
    <!-- Owl JavaScript -->
    <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
    <!-- ChartJS JavaScript -->
    <script src="{{url('resources/vendors/chart.js/Chart.min.js')}}"></script>
    
    <!-- EasyPieChart JavaScript -->
    <script src="{{url('resources/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{url('resources/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
    
    <!-- Switchery JavaScript -->
    <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
    
    <!-- Bootstrap Select JavaScript -->
    <script src="{{url('resources/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    
    <!-- Init JavaScript -->
    <script src="{{url('resources/dist/js/init.js')}}"></script>
    <script src="{{url('resources/dist/js/ecommerce-data.js')}}"></script>
        
    <!-- Sweet-Alert  -->
    <script src="{{url('resources/vendors/bower_components/sweetalert/dist/sweetalert.min.js')}}"></script>
    <script src="{{url('resources/dist/js/sweetalert-data.js')}}"></script>

    <!-- bootstrap-datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

    <!-- toastr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- jquery.validate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>

    <!-- fullCalendar -->
    <script src="{{url('resources/dist/js/fullcalendar.min.js')}}"></script>
    <script src="{{url('resources/dist/js/moment.js')}}"></script>

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
