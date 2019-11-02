<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @include('include.meta')
        
        <!-- Jasny-bootstrap CSS -->
        <link href="{{url('resources/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

        <!-- bootstrap-datepicker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />

        <!-- Data table CSS -->
        <link href="{{url('resources/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css"/>

        {{-- chosen --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />

        <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" />
        
        <!-- Custom CSS -->
        <link href="{{url('resources/dist/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('css/custom.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('css/new-form-style.css')}}" rel="stylesheet" type="text/css">

        @yield('styles')
    </head>
    <body>
        <!--Preloader-->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->
        <div class="wrapper theme-1-active pimary-color-red">
            @include('include.nav')
            <div id="spa-route-view">
                @yield('content')
            </div>
        </div>
        <!-- /#wrapper -->
        
        <!-- JavaScript -->
        
        <!-- jQuery -->
        <script src="{{url('resources/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        
        <script src="{{url('resources/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
        <!-- Fancy Dropdown JS -->
        <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
        
        <!-- Owl JavaScript -->
        <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    
        <!-- Switchery JavaScript -->
        <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

        <!-- toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- Google Map JavaScript -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>

        <!-- jquery.validate -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>

        <!-- bootstrap-datepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

        <!-- Data table JavaScript -->
        <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>

        {{-- choosen --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

        <!-- Progressbar Animation JavaScript -->
        <script src="{{url('resources/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
        <script src="{{url('resources/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
        
        {{-- page scripts start --}}
        @yield('scripts')
        {{-- page scripts end --}}

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