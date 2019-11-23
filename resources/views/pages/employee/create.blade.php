@extends('layout.form')
@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">@lang('form.add') {{$page_name}}</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/home')}}')">
                            @lang('form.dashboard')
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/employee')}}')">
                            <span>{{$page_name}} @lang('form.list')</span>
                        </a>
                    </li>
                    <li class="active"><span>@lang('form.add')</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
            <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div class="form-wrap">
                                <form method="post" action="{{url('employee')}}" 
                                    enctype="multipart/form-data" id="add-form">
                                    <input name="_token" type="hidden" 
                                        value="{{ csrf_token() }}"/>
                                    <div class="col-sm-6">    
                                        <div class="row"> 
                                            <div class="form-group col-md-12">
                                                <label class="control-label mb-10 text-left" 
                                                    for="first_name">
                                                   @lang('form.first_name')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    name="first_name" id="first_name" 
                                                    placeholder="Enter first name" 
                                                    value="{{old('first_name')}}" required>
                                                @if ($errors->has('first_name'))
                                                    <label class="error">
                                                        {{ $errors->first('first_name') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="middle_name">
                                                    @lang('form.middle_name')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    name="middle_name" id="middle_name" 
                                                    placeholder="Enter middle name" 
                                                    value="{{old('middle_name')}}">
                                                @if ($errors->has('middle_name'))
                                                    <label class="error">
                                                        {{ $errors->first('middle_name') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="last_name">
                                                   @lang('form.last_name')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    name="last_name" id="last_name" 
                                                    placeholder="Enter last name" 
                                                    value="{{old('last_name')}}" required>
                                                @if ($errors->has('last_name'))
                                                    <label class="error">
                                                        {{ $errors->first('last_name') }}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="gender">
                                                   @lang('form.gender')
                                                </label>
                                                <select class="form-control chosen-input" id="gender" 
                                                    name="gender" required>
                                                    <option value="1">@lang('form.male')</option>
                                                    <option value="2"> @lang('form.female')</option>
                                                </select>
                                                @if ($errors->has('gender'))
                                                    <label class="error">
                                                        {{ $errors->first('gender') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="branch">
                                                   @lang('form.branch')
                                                </label>
                                                <select class="form-control chosen-input" id="branch_id" 
                                                    name="branch_id" required>
                                                    <option value="">
                                                        -- select branch --
                                                    </option>
                                                    @foreach($branches as $branch)
                                                        <option value="{{$branch->id}}">
                                                            {{$branch->name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('branch_id'))
                                                    <label class="error">
                                                        {{ $errors->first('branch_id') }}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="primary_phone">
                                                   @lang('form.primary_phone')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    id="primary_phone" name="primary_phone" 
                                                    placeholder="Enter primary phone" 
                                                    value="{{old('primary_phone')}}" 
                                                    required>
                                                @if ($errors->has('primary_phone'))
                                                    <label class="error">
                                                        {{ $errors->first('primary_phone') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="secondary_phone">
                                                    @lang('form.secondary_phone')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    id="secondary_phone" name="secondary_phone" 
                                                    placeholder="Enter secondary phone" 
                                                    value="{{old('secondary_phone')}}">
                                                @if ($errors->has('secondary_phone'))
                                                    <label class="error">
                                                        {{ $errors->first('secondary_phone') }}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row"> 
                                           
                                            <div class="form-group col-md-12">
                                                <label class="control-label mb-10 text-left" 
                                                    for="email">
                                                    @lang('form.email')
                                                </label>
                                                 <input type="email" id="email" name="email" 
                                                class="form-control" placeholder="Enter email" 
                                                value="{{old('email')}}" 
                                                required>
                                            @if ($errors->has('email'))
                                                <label class="error">
                                                    {{ $errors->first('email') }}
                                                </label>
                                            @endif
                                            </div>
                                        </div>
                                          <div class="row"> 
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="password">
                                                   @lang('form.password') 
                                                </label>
                                                <input type="password" id="password" 
                                                    name="password" class="form-control" 
                                                    placeholder="Enter password" 
                                                    value="{{old('password')}}" required>
                                                @if ($errors->has('password'))
                                                    <label class="error">
                                                        {{ $errors->first('password') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label class="control-label mb-10 text-left" 
                                                    for="confirm_password">
                                                    @lang('form.confirm_password')  
                                                </label>
                                                <input type="password" 
                                                    id="confirm_password" name="confirm_password" 
                                                    class="form-control" placeholder="Enter confirm password" 
                                                    required>
                                            </div>
                                        </div>
                                      
                                       
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-30">
                                            <label class="control-label mb-10 text-left"
                                                for="avatar">
                                               @lang('form.profile_picture') 
                                            </label>
                                            <div class="fileinput fileinput-new input-group"
                                                data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">     <i class="glyphicon glyphicon-file 
                                                    fileinput-exists"></i> 
                                                    <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon fileupload btn
                                                    btn-info btn-anim btn-file">
                                                    <i class="fa fa-upload"></i> 
                                                    <span class="fileinput-new btn-text">
                                                       @lang('form.select_file') 
                                                    </span> 
                                                    <span class="fileinput-exists btn-text">
                                                        @lang('form.change') 
                                                    </span>
                                                    <input type="file" id="avatar" name="avatar">
                                                </span> 
                                                <a href="#" class="input-group-addon btn 
                                                    btn-danger btn-anim fileinput-exists" data-dismiss="fileinput">
                                                    <i class="fa fa-trash"></i>
                                                    <span class="btn-text">@lang('form.remove')</span>
                                                </a> 
                                            </div>
                                            <label id="avatar-error" class="error" 
                                                for="avatar"></label>
                                            @if ($errors->has('avatar'))
                                                <label class="error">
                                                    {{ $errors->first('avatar') }}
                                                </label>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="address">
                                               @lang('form.address')
                                            </label>
                                            <textarea class="form-control" rows="5" 
                                                id="address" name="address" 
                                                placeholder="Enter address" 
                                                required>{{old('address')}}</textarea>
                                            @if ($errors->has('address'))
                                                <label class="error">
                                                    {{ $errors->first('address') }}
                                                </label>
                                            @endif
                                        </div>   
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="control-label mb-10 text-left" 
                                                    for="country">
                                                    @lang('form.country')
                                                </label>
                                                <select class="form-control chosen-input" id="country" 
                                                    name="country" onchange="changeCountry(this.value)"  required>
                                                    <option value="">-- select country --</option>
                                                    @foreach($countries as $key => $country)
                                                        <option value="{{$key}}">
                                                            {{$country}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('country'))
                                                    <label class="error">
                                                        {{ $errors->first('country') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label mb-10 text-left" 
                                                    for="state">
                                                    @lang('form.state')
                                                </label>
                                                <select class="form-control chosen-input" id="state" 
                                                    name="state" required>
                                                </select>
                                                @if ($errors->has('state'))
                                                    <label class="error">
                                                        {{ $errors->first('state') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label class="control-label mb-10 text-left" 
                                                    for="city">
                                                    @lang('form.city')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    id="city" name="city" 
                                                    placeholder="Enter city" 
                                                    value="{{old('city')}}" 
                                                    required>
                                                @if ($errors->has('city'))
                                                    <label class="error">
                                                        {{ $errors->first('city') }}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                      
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success btn-anim">
                                                <i class="icon-rocket"></i>
                                                <span class="btn-text">@lang('form.submit') </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
        <!-- /Row -->
        @include('include.footer')
    </div>
</div>
<!-- /Main Content -->
@endsection

@section('scripts')
    <script type="text/javascript">
        // validation
        $("#add-form").validate({
            rules: {
                first_name: {
                    maxlength: 25,
                    minlength: 3,
                    IsAlphaSpace: true
                },
                middle_name: {
                    maxlength: 25,
                    minlength: 1,
                    IsAlphaSpace: true
                },
                last_name: {
                    maxlength: 25,
                    minlength: 3,
                    IsAlphaSpace: true
                },
                primary_phone: {
                    maxlength: 15,
                    minlength: 5,
                    IsPhone: true
                },
                secondary_phone: {
                    maxlength: 15,
                    minlength: 5,
                    IsPhone: true
                },
                salary: {
                    maxlength: 15,
                    minlength: 4,
                },
                address: {
                    maxlength: 500,
                    minlength: 5
                },
                city: {
                    maxlength: 25,
                    minlength: 3,
                    IsAlphaSpace: true
                },
                password: {
                    maxlength: 10,
                    minlength: 6
                },
                confirm_password: {
                    equalTo: "#password"
                },
                avatar: {
                    extension: "jpg,jpeg,png",
                    filesize: 2000000
                }
            },
            messages: {
                avatar: {
                    extension: 'Please choose valid file',
                    filesize: 'File size must be less than 2 MB'
                }
            }
        });
        // // changeDepartment
        // function changeDepartment(department_id) {
        //     if(department_id) {
        //         $.get("/department/" + department_id + "/designation/json", function(data, status){
        //             $('#designation_id').html('<option value="">-- select designation --</option>');
        //             $.each(data, function(key, value) {   
        //                 $('#designation_id')
        //                     .append($("<option></option>")
        //                         .attr("value", value.id)
        //                         .text(value.title)); 
        //             });
        //             $('#designation_id').trigger("chosen:updated");
        //         });
        //     }
        // }
        // changeCountry
        function changeCountry(country_id) {
            if(country_id) {
                $.get("/country/" + country_id + "/states/json", function(data, status){
                    $('#state').html('<option value="">-- select state --</option>');
                    $.each(data, function(key, value) {   
                        $('#state')
                            .append($("<option></option>")
                                .attr("value", key)
                                .text(value)); 
                    });
                    $('#state').trigger("chosen:updated");
                });
            }
        }
    </script>
@endsection