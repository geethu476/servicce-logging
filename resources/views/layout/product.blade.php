<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    @include('include.meta')
    
    <!-- jquery-steps css -->
    <link rel="stylesheet" href="{{url('resources/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css')}}">
    
    <!-- bootstrap-touchspin CSS -->
    <link href="{{url('resources/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css"/>
    
    <!-- Data table CSS -->
    <link href="{{url('resources/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    
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
    
    <!-- Form Wizard JavaScript -->
    <script src="{{url('resources/vendors/bower_components/jquery.steps/build/jquery.steps.min.js')}}"></script>
    
    
    
    <!-- Bootstrap Touchspin JavaScript -->
    <script src="{{url('resources/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
        
    <!-- Starrr JavaScript -->
    <script src="{{url('resources/dist/js/starrr.js')}}"></script>
    
    <!-- Product Detail Data JavaScript -->
    <script src="{{url('resources/dist/js/product-detail-data.js')}}"></script>
    
    <!-- Product Checkout Data JavaScript -->
    <script src="{{url('resources/dist/js/product-cart-data.js')}}"></script>
        
    <!-- Data table JavaScript -->    
    <script src="{{url('resources/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{url('resources/dist/js/productorders-data.js')}}"></script>

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
