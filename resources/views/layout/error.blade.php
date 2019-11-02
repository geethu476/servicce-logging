<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        @include('include.meta')
        
        <!-- vector map CSS -->
        <link href="{{url('resources/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        
        
        
        <!-- Custom CSS -->
        <link href="{{url('resources/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!--Preloader-->
        <div class="preloader-it">
            <div class="la-anim-1"></div>
        </div>
        <!--/Preloader-->
        
        <div class="wrapper error-page pa-0">
            <header class="sp-header">
                <div class="sp-logo-wrap pull-left">
                    <a href="javascript:void(0);" 
                        onclick="spaRouteLoad('form', '{{url('/home')}}')">
                        <img class="brand-img mr-10" 
                            src="{{$general_setting->site_logo}}" 
                            alt="brand" style="height:26px;"/>
                        <span class="brand-text">{{$general_setting->site_title}}</span>
                    </a>
                </div>
                <div class="form-group mb-0 pull-right">
                    <a class="inline-block btn btn-info btn-rounded btn-outline nonecase-font" href="{{url('/home')}}">Back to Home</a>
                </div>
                <div class="clearfix"></div>
            </header>
            
            <!-- Main Content -->
            @yield('content')
            <!-- /Main Content -->
        
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
        
        <!-- Init JavaScript -->
        <script src="{{url('resources/dist/js/init.js')}}"></script>
    </body>
</html>
