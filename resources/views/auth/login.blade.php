@extends('layout.auth')
@section('content')
<div class="page-wrapper pa-0 ma-0 auth-page">
    <div class="container-fluid">
        <!-- Row -->
        <div class="table-struct full-width full-height">
            <div class="table-cell vertical-align-middle auth-form-wrap">
                <div class="auth-form  ml-auto mr-auto no-float">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="mb-10 welcome-div">
                                <h3 class="text-center txt-dark mb-30">
                                    Welcome to 
                                    <img class="brand-img mr-10" 
                                        src="{{-- {{$general_setting->site_logo}} --}}" />
                                </h3>
                                <h6 class="text-center nonecase-font txt-dark">
                                    Sign in to start your session
                                </h6>
                                @if ($errors->has('email'))
                                    <div class="alert alert-error">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                                @if ($errors->has('password'))
                                    <div class="alert alert-error">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>  
                            <div class="form-wrap">
                                <form action="{{ route('login') }}" method="post" 
                                    id="login-form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="control-label mb-10 txt-dark" 
                                            for="email">
                                            Email address
                                        </label>
                                        <input type="email" class="form-control" 
                                            id="email" name="email" placeholder="Enter email" 
                                            value="admin@admin.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-left control-label mb-10 txt-dark" 
                                            for="password">
                                            Password
                                        </label>
                                        <div class="clearfix"></div>
                                        <input type="password" class="form-control" 
                                            id="password" name="password" value="password" 
                                            placeholder="Enter password" required>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-info 
                                            btn-rounded">
                                            sign in
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->   
    </div>
</div>
@endsection

@section('styles')
    <style type="text/css">
        .auth-page {
            background: url('/images/bg.jpg') !important;
            background-repeat: no-repeat;
            background-size: cover !important;
        }
        .alert-error {
            text-align: center;
            background-color: red;
        }
        .welcome-div h3 {
            padding: 1px;
        }
        .welcome-div h3 img {
            height: 30px;
            vertical-align: middle;
        }
    </style>
@endsection

@section('scripts')
    <script type="text/javascript">
        // validation
        $("#login-form").validate();
    </script>
@endsection