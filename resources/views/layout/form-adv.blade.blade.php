<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @include('include.meta')
        
        
        <!-- Bootstrap Colorpicker CSS -->
        <link href="{{url('resources/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Jasny-bootstrap CSS -->
        <link href="{{url('resources/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- select2 CSS -->
        <link href="{{url('resources/vendors/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- switchery CSS -->
        <link href="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- bootstrap-select CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- bootstrap-tagsinput CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- bootstrap-touchspin CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- multi-select CSS -->
        <link href="{{url('resources/vendors/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap Switches CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap Datetimepicker CSS -->
        <link href="{{url('resources/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- Bootstrap Daterangepicker CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css"/>
         
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
        
        <!-- JavaScripts -->
        
        <!-- jQuery -->
        <script src="{{url('resources/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        
        <!-- Moment JavaScript -->
        <script type="text/javascript" src="{{url('resources/vendors/bower_components/moment/min/moment-with-locales.min.js')}}"></script>
        
        <!-- Bootstrap Colorpicker JavaScript -->
        <script src="{{url('resources/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
        
        <!-- Switchery JavaScript -->
        <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
        
        <!-- Select2 JavaScript -->
        <script src="{{url('resources/vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
        
        <!-- Bootstrap Select JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
        
        <!-- Bootstrap Tagsinput JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
        
        <!-- Bootstrap Touchspin JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
        
        <!-- Multiselect JavaScript -->
        <script src="{{url('resources/vendors/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
        
         
        <!-- Bootstrap Switch JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-switch/dist/js/bootstrap-switch.min.js')}}"></script>
        
        <!-- Bootstrap Datetimepicker JavaScript -->
        <script type="text/javascript" src="{{url('resources/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
        
        <!-- Bootstrap Daterangepicker JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        
        <!-- Form Picker Init JavaScript -->
        <script src="{{url('resources/dist/js/form-picker-data.js')}}"></script>
        
        
        <!-- Form Advance Init JavaScript -->
        <script src="{{url('resources/dist/js/form-advance-data.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
        <!-- Fancy Dropdown JS -->
        <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
        
        <!-- Owl JavaScript -->
        <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
        <!-- Init JavaScript -->
        <script src="{{url('resources/dist/js/init.js')}}"></script>
        
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
        
    </body>
</html>