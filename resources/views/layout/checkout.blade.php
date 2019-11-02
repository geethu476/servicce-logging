<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @include('include.meta')
        <!-- vector map CSS -->
        <link href="{{url('resources/vendors/bower_components/jquery-wizard.js/css/wizard.css')}}" rel="stylesheet" type="text/css"/>
        
        <!-- jquery-steps css -->
        <link rel="stylesheet" href="{{url('resources/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css')}}">
                
        <!-- Data table CSS -->
        <link href="{{url('resources/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- toastr -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        
        <!-- bootstrap-touchspin CSS -->
        <link href="{{url('resources/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- bootstrap-datepicker -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css" />

        {{-- chosen --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" />
        
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
        <script src="{{url('resources/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>        
        
        <!-- Form Wizard JavaScript -->
        <script src="{{url('resources/vendors/bower_components/jquery.steps/build/jquery.steps.min.js')}}"></script>
        
        <!-- Data table JavaScript -->
        <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
        
        <!-- Bootstrap Touchspin JavaScript -->
        <script src="{{url('resources/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
        
        <!-- Owl JavaScript -->
        <script src="{{url('resources/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
        
        <!-- Product Checkout Data JavaScript -->
        <script src="{{url('resources/dist/js/product-checkout-data.js')}}"></script>
        
        <!-- Slimscroll JavaScript -->
        <script src="{{url('resources/dist/js/jquery.slimscroll.js')}}"></script>
    
        <!-- Fancy Dropdown JS -->
        <script src="{{url('resources/dist/js/dropdown-bootstrap-extended.js')}}"></script>
        
        <!-- Switchery JavaScript -->
        <script src="{{url('resources/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>

        <!-- bootstrap-datepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>

        <!-- toastr -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <!-- jquery.validate -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js"></script>

        {{-- choosen --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
        
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
            
        @yield('scripts')
    </body>
</html>