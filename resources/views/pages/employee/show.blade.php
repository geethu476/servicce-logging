@extends('layout.form')
@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">{{$page_name}} @lang('form.detail')</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                      <li><a href="{{url('/home')}}">@lang('form.dashboard')</a></li>
                              <li><a href="{{url('/employee')}}">
                {{$page_name}} @lang('form.list')</a></li>
                    <li class="active"><span>{{$page_name}} @lang('form.detail')</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-3 col-xs-12">
                <div class="panel panel-default card-view  pa-0">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body  pa-0">
                            <div class="profile-box">
                                <div class="profile-cover-pic">
                                    <div class="profile-image-overlay"></div>
                                </div>
                                <div class="profile-info text-center">
                                    <div class="profile-img-wrap">
                                        <img class="inline-block mb-10" 
                                            src="{{$employee->avatar_url}}" 
                                            alt="{{$employee->name}}"/>
                                    </div>  
                                    <h5 class="block mt-10 mb-5 weight-500 capitalize-font 
                                        txt-danger">{{$employee->name}}</h5>
                                    <h6 class="block capitalize-font pb-20">
                                        {{$employee->branch->name}} <br>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-xs-12">
                <div class="panel panel-default card-view pa-0">
                    <div class="panel-wrapper collapse in">
                        <div  class="panel-body pb-0">
                            <div  class="tab-struct custom-tab-1">
                                <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                                    <li class="active" role="presentation">
                                        <a  data-toggle="tab" id="profile_content_tab" role="tab" 
                                            href="#profile_content" aria-expanded="false">
                                            @lang('form.profile')
                                        </a>
                                    </li>                      
                                  
                                    <li role="presentation" class="">
                                        <a  data-toggle="tab" id="settings_content_tab" 
                                            role="tab" href="#settings_content" 
                                            aria-expanded="false">
                                            @lang('form.update_profile')
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent_8">
                                    <div  id="profile_content" class="tab-pane fade active in" 
                                        role="tabpanel">
                                        <div class="col-md-12">
                                            <div class="pt-20">
                                                <div class="panel panel-danger contact-card card-view">
                                                    <div class="panel-wrapper collapse in">
                                                        <div class="panel-body row">
                                                            <div class="user-others-details pl-15 pr-15">
                                                                <div class="mb-15">
                                                                    <i class="zmdi zmdi-email-open inline-block mr-10"></i>
                                                                    <span class="inline-block txt-dark">
                                                                        {{$employee->user->email}}
                                                                    </span>
                                                                </div>
                                                                <div class="mb-15">
                                                                    <i class="zmdi zmdi-smartphone inline-block mr-10"></i>
                                                                    <span class="inline-block txt-dark">
                                                                        {{$employee->primary_phone}}
                                                                    </span>
                                                                </div>
                                                                <div class="mb-15">
                                                                    <i class="zmdi zmdi-phone inline-block mr-10"></i>
                                                                    <span class="inline-block txt-dark">
                                                                        {{$employee->secondary_phone}}
                                                                    </span>
                                                                   </div>
                                                                
                                                                <div class="mb-15">
                                                                    <i class="zmdi zmdi-email-open inline-block mr-10"></i>
                                                                    @lang('form.address')<br>
                                                                    <span class="inline-block txt-dark">
                                                                       {{$employee->address}}
                                                                    </span>
                                                                </div>
                                                                
                                                            </div>
                                                            <hr class="light-grey-hr mt-20 mb-20">
                                                            <div class="emp-detail pl-15 pr-15">
                                                                <div class="mb-5">
                                                                    <span class="inline-block capitalize-font mr-5">@lang('form.joininig_date')</span>
                                                                    <span class="txt-dark">
                                                                    {{Carbon\Carbon::parse($employee->created_at)->format('d-m-Y')}}
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  id="task_content" class="tab-pane fade" role="tabpanel">
                                        <div class="col-md-12">
                                            <div class="pt-20">
                                                <div class="streamline user-activity">
                                                    <div class="sl-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="sl-avatar avatar avatar-sm 
                                                                avatar-circle">
                                                                <img class="img-responsive img-circle" 
                                                                    src="{{url('resources/dist/img/user.png')}}"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div class="sl-content">
                                                                <p class="inline-block">
                                                                    <span class="capitalize-font txt-success 
                                                                        mr-5 weight-500">
                                                                        @lang('form.clay_masse')
                                                                    </span>
                                                                    <span>
                                                                        invited to join the meeting in the conference room at 9.45 am
                                                                    </span>
                                                                </p>
                                                                <span class="block txt-grey font-12 
                                                                    capitalize-font">
                                                                    3 Min
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="sl-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="sl-avatar avatar avatar-sm 
                                                                avatar-circle">
                                                                <img class="img-responsive img-circle" 
                                                                    src="{{url('resources/dist/img/user1.png')}}"
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div class="sl-content">
                                                                <p class="inline-block">
                                                                    <span class="capitalize-font txt-success 
                                                                        mr-5 weight-500">
                                                                       @lang('form.evie_ono')
                                                                    </span>
                                                                    <span>
                                                                        added three new photos in the library
                                                                    </span>
                                                                </p>
                                                                <div class="activity-thumbnail">
                                                                    <img src="{{url('resources/dist/img/thumb-1.jpg')}}" 
                                                                        alt="thumbnail"/>
                                                                    <img src="{{url('resources/dist/img/thumb-2.jpg')}}" 
                                                                        alt="thumbnail"/>
                                                                    <img src="{{url('resources/dist/img/thumb-3.jpg')}}" 
                                                                        alt="thumbnail"/>
                                                                </div>
                                                                <span class="block txt-grey font-12 
                                                                    capitalize-font">
                                                                    8 Min
                                                                </span>
                                                            </div>
                                                        </a>    
                                                    </div>
                                                    <div class="sl-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="sl-avatar avatar avatar-sm 
                                                                avatar-circle">
                                                                <img class="img-responsive img-circle" src="{{url('resources/dist/img/user2.png')}}" 
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div class="sl-content">
                                                                <p class="inline-block">
                                                                    <span class="capitalize-font txt-success 
                                                                        mr-5 weight-500">
                                                                       @lang('form.madalyn_rascon')
                                                                    </span>
                                                                    <span>
                                                                        assigned a new task
                                                                    </span>
                                                                </p>
                                                                <span class="block txt-grey font-12 
                                                                    capitalize-font">
                                                                    28 Min
                                                                </span>
                                                            </div>
                                                        </a>    
                                                    </div>
                                                    <div class="sl-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="sl-avatar avatar avatar-sm 
                                                                avatar-circle">
                                                                <img class="img-responsive img-circle" src="{{url('resources/dist/img/user3.png')}}" 
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div class="sl-content">
                                                                <p class="inline-block">
                                                                    <span class="capitalize-font txt-success 
                                                                        mr-5 weight-500">
                                                                       @lang('form.ezequiel_merideth')
                                                                    </span>
                                                                    <span>
                                                                        completed project wireframes
                                                                    </span>
                                                                </p>
                                                                <span class="block txt-grey font-12 
                                                                    capitalize-font">
                                                                    yesterday
                                                                </span>
                                                            </div>
                                                        </a>    
                                                    </div>
                                                    <div class="sl-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="sl-avatar avatar avatar-sm 
                                                                avatar-circle">
                                                                <img class="img-responsive img-circle" src="{{url('resources/dist/img/user4.png')}}" 
                                                                    alt="avatar"/>
                                                            </div>
                                                            <div class="sl-content">
                                                                <p class="inline-block">
                                                                    <span class="capitalize-font txt-success 
                                                                        mr-5 weight-500">
                                                                    @lang('form.jonnie_metoyer')
                                                                    </span>
                                                                    <span>
                                                                        created a group 'Hencework' in the discussion forum
                                                                    </span>
                                                                </p>
                                                                <span class="block txt-grey font-12 
                                                                    capitalize-font">
                                                                    18 feb
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  id="salary_list_content" class="tab-pane fade" role="tabpanel">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="salary-form" action="#">
                                                    <div class="table-wrap">
                                                        <div class="table-responsive">
                                                            <h6 class="col-lg-12">@lang('form.salary_list')</h6>
                                                            <table class="table table-striped display 
                                                                product-overview" id="datable_1">
                                                                <thead>
                                                                    <tr>
                                                                    <th>@lang('form.date')</th>
                                                                    <th>@lang('form.amount')</th>
                                                                    <th>@lang('form.payment_method')</th>
                                                                    </tr>
                                                                </thead>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th colspan="2">@lang('form.total')</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </tfoot>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>01-01-18, Monday</td>
                                                                        <td>$400</td>
                                                                        <td>
                                                                        @lang('form.net_banking')
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div  id="salary_advance_content" class="tab-pane fade" role="tabpanel">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="advance-salary-form" action="#">
                                                    <div class="table-wrap"> 
                                                        <div class="table-responsive">
                                                            <h6 class="col-lg-12">@lang('form.salary_advance')</h6>
                                                            <table class="table table-striped display 
                                                                product-overview" id="datable_1">
                                                                <thead>
                                                                    <tr>
                                                                        <th>@lang('form.date')</th>
                                                                        <th>@lang('form.amount')</th>
                                                                        <th>@lang('form.payment_method')</th>
                                                                    </tr>
                                                                </thead>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th colspan="2">@lang('form.total')</th>
                                                                        <th></th>
                                                                    </tr>
                                                                </tfoot>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>01-01-18, Monday</td>
                                                                        <td>$400</td>
                                                                        <td>
                                                                         @lang('form.direct_payment')
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div  id="working_content" class="tab-pane fade" role="tabpanel">
                                        <!-- Row -->
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form id="working-hours-form" action="#">
                                                    <div class="table-wrap">
                                                        <div class="table-responsive">
                                                            <h6 class="col-lg-12">@lang('form.working_hours')</h6>
                                                            <table class="table mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>@lang('form.date')</th>
                                                                        <th>@lang('form.no_of_hours_worked')</th>
                                                                        <th>@lang('form.over_time_hours')</th>
                                                                        <th>@lang('form.start_time')</th>
                                                                        <th>@lang('form.end_time')</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <a href="javascript:void(0)">
                                                                                <i class="fa fa-calendar-check-o"></i> 
                                                                                Oct 16, 2018
                                                                            </a>
                                                                        </td>
                                                                        <td>7.5h</td>
                                                                        <td>3h</td>
                                                                        <td>
                                                                            <span class="text-muted">
                                                                                <i class="fa fa-clock-o"></i> 
                                                                                6.00pm
                                                                            </span> 
                                                                        </td>
                                                                        <td>
                                                                            <span class="text-muted">
                                                                                <i class="fa fa-clock-o"></i> 8.00pm
                                                                            </span> 
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div  id="leave_history_content" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="followers-wrap">
                                                    <h6 class="col-lg-12 mb-20">@lang('form.leave_history')</h6>
                                                    <ul class="followers-list-wrap">
                                                        <li class="follow-list">
                                                            <div class="follo-body">
                                                                <div class="follo-data">
                                                                    <img class="user-img img-circle"  src="{{url('resources/dist/img/user.png')}}" 
                                                                        alt="user"/>
                                                                    <div class="user-data">
                                                                        <span class="name block 
                                                                            capitalize-font">
                                                                           @lang('form.clay_masse')
                                                                        </span>
                                                                        <span class="time block truncate 
                                                                            txt-grey">
                                                                            No one saves us but ourselves.
                                                                        </span>
                                                                    </div>
                                                                    <button class="btn btn-success pull-right 
                                                                        btn-xs fixed-btn">
                                                                       @lang('form.approved')
                                                                    </button>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                                <div class="follo-data">
                                                                    <img class="user-img img-circle" src="{{url('resources/dist/img/user1.png')}}" 
                                                                        alt="user"/>
                                                                    <div class="user-data">
                                                                        <span class="name block 
                                                                            capitalize-font">
                                                                            @lang('form.evie_ono')
                                                                        </span>
                                                                        <span class="time block truncate 
                                                                            txt-grey">

                                                                    @lang('form.unity_is_strength')
                                                                        </span>
                                                                    </div>
                                                                    <button class="btn btn-success btn-outline 
                                                                        pull-right btn-xs fixed-btn">
                                                                        @lang('form.pending')
                                                                    </button>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div  id="apply_leave_content" class="tab-pane fade" role="tabpanel">
                                        <div class="col-lg-12">
                                            <h6 class="mb-20">@lang('form.apply_leave')</h6>
                                            <div class="panel panel-default card-view">
                                                <div class="panel-wrapper collapse in">
                                                    <div class="panel-body">
                                                        <div class="form-wrap">
                                                            <form action="#">
                                                                <div class="form-body overflow-hide">
                                                                    <div class="row">
                                                                        <div class="form-group col-md-6">
                                                                            <label class="control-label mb-10 
                                                                                text-left">
                                                                            @lang('form.date')
                                                                            </label>
                                                                            <div class='input-group date 
                                                                                datetimepicker1'>
                                                                                <input type='text' 
                                                                                    class="form-control" />
                                                                                <span class="input-group-addon">
                                                                                    <span class="fa fa-calendar"></span>
                                                                                </span>
                                                                            </div> 
                                                                        </div>
                                                                        <div class="form-group col-md-6">
                                                                            <label class="control-label mb-10" 
                                                                                for="designation">
                                                                               @lang('form.title')
                                                                            </label>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon">
                                                                                    <i class="icon-tag"></i>
                                                                                </div>
                                                                                <input type="text" 
                                                                                    class="form-control" 
                                                                                    id="title" placeholder="Title" value="title">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label class="control-label mb-10 
                                                                            text-left">
                                                                            @lang('form.description')
                                                                        </label>
                                                                        <textarea class="form-control" rows="5"></textarea>
                                                                    </div> 
                                                                </div>
                                                                <div class="form-actions mt-10">            
                                                                    <button type="submit" class="btn 
                                                                        btn-success mr-10 mb-30">
                                                                        @lang('form.update_profile')
                                                                    </button>
                                                                </div>              
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>

        <div  id="settings_content" class="tab-pane fade" role="tabpanel">
            <!-- Row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body pa-0">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="form-wrap">
                                        <form action="{{url('employee/' . $employee->id)}}" method="post" 
                                            enctype="multipart/form-data" id="update-form">
                                            <input name="_token" type="hidden" 
                                                value="{{ csrf_token() }}"/>
                                            {{ method_field('PUT') }}
                                            <input type="hidden" name="id" 
                                                value="{{$employee->id}}">
                                            <input type="hidden" name="user_id" 
                                                value="{{$employee->user->id}}">
                                            <div class="form-body overflow-hide">
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="first_name">
                                                            @lang('form.first_name')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <input type="text" class="form-control" 
                                                                id="first_name" name="first_name" 
                                                                placeholder="Enter first name" 
                                                                value="{{old('first_name', $employee->first_name)}}" 
                                                                required>
                                                            @if ($errors->has('first_name'))
                                                                <label class="error">
                                                                    {{ $errors->first('first_name') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="middle_name">
                                                            @lang('form.middle_name')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <input type="text" class="form-control" 
                                                                id="middle_name" name="middle_name" 
                                                                placeholder="Enter middle name" 
                                                                value="{{old('middle_name', $employee->middle_name)}}">
                                                            @if ($errors->has('middle_name'))
                                                                <label class="error">
                                                                    {{ $errors->first('middle_name') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="last_name">
                                                            @lang('form.last_name')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <input type="text" class="form-control" 
                                                                id="last_name" name="last_name" 
                                                                placeholder="Enter last name" 
                                                                value="{{old('last_name', $employee->last_name)}}" 
                                                                required>
                                                            @if ($errors->has('last_name'))
                                                                <label class="error">
                                                                    {{ $errors->first('last_name') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group form-inline col-md-6">
                                                        <label class="control-label mb-10">
                                                            @lang('form.gender')
                                                        </label>
                                                        <div>
                                                            <div class="radio">
                                                                <input type="radio" id="male" 
                                                                    name="gender" value="1" 
                                                                    {{($employee->gender == 1 ? 'checked' : '')}} 
                                                                    required>
                                                                <label for="male">
                                                                   @lang('form.male')
                                                                </label>
                                                            </div>
                                                            <div class="radio">
                                                                <input type="radio" name="gender" 
                                                                    id="female" value="2" 
                                                                    {{($employee->gender == 2 ? 'checked' : '')}}>
                                                                <label for="female">
                                                                    @lang('form.female')
                                                                </label>
                                                            </div>
                                                            @if ($errors->has('gender'))
                                                                <label class="error">
                                                                    {{ $errors->first('gender') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label mb-10" 
                                                            for="primary_phone">
                                                            @lang('form.primary_phone')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-phone"></i>
                                                            </div>
                                                            <input type="text" class="form-control" 
                                                                id="primary_phone" name="primary_phone" 
                                                                placeholder="Enter primary phone" 
                                                                value="{{old('primary_phone', $employee->primary_phone)}}"
                                                                required>
                                                            @if ($errors->has('primary_phone'))
                                                                <label class="error">
                                                                    {{ $errors->first('primary_phone') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label mb-10" 
                                                            for="secondary_phone">
                                                             @lang('form.secondary_phone')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-phone"></i>
                                                            </div>
                                                            <input type="text" class="form-control" 
                                                                id="secondary_phone" name="secondary_phone" 
                                                                placeholder="Enter primary phone" 
                                                                value="{{old('secondary_phone', $employee->secondary_phone)}}">
                                                            @if ($errors->has('secondary_phone'))
                                                                <label class="error">
                                                                    {{ $errors->first('secondary_phone') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label mb-10" 
                                                            for="branch_id">
                                                            @lang('form.branch')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-badge"></i>
                                                            </div>
                                                            <select class="
                                                                form-control" 
                                                                id="branch_id" 
                                                                name="branch_id" 
                                                                required>
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
                                                   
                                                </div>
                                              
                                               
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label class="control-label mb-10 text-left"
                                                            for="avatar">
                                                            @lang('form.profile_picture')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-user"></i>
                                                            </div>
                                                            <input class="form-control" 
                                                                type="file" 
                                                                name="avatar">
                                                            @if ($errors->has('avatar'))
                                                                <label class="error">
                                                                    {{ $errors->first('avatar') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="control-label mb-10" 
                                                            id="address">
                                                            @lang('form.address')
                                                        </label>
                                                        <textarea id="address" name="address" 
                                                            class="form-control" rows="5" 
                                                            placeholder="Enter address" 
                                                            required>{{old('address', $employee->address)}}</textarea>
                                                        @if ($errors->has('address'))
                                                            <label class="error">
                                                                {{ $errors->first('address') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="country">
                                                           @lang('form.country')
                                                        </label>
                                                        <select class="form-control" id="country" 
                                                            name="country" onchange="changeCountry(this.value)"
                                                            required>
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
                                                        <label class="control-label mb-10" 
                                                            for="state">
                                                            @lang('form.state')
                                                        </label>
                                                        <select class="form-control" id="state" 
                                                            name="state" required>
                                                        </select>
                                                        @if ($errors->has('state'))
                                                            <label class="error">
                                                                {{ $errors->first('state') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            id="city">
                                                            @lang('form.city')
                                                        </label>
                                                        <input type="text" class="form-control" 
                                                            id="city" name="city" 
                                                            placeholder="Enter city" 
                                                            value="{{old('city', $employee->city)}}" 
                                                            required>
                                                        @if ($errors->has('city'))
                                                            <label class="error">
                                                                {{ $errors->first('city') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="email">
                                                            @lang('form.email')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-envelope-open"></i>
                                                            </div>
                                                            <input type="email" 
                                                                class="form-control" id="email" 
                                                                name="email" 
                                                                placeholder="Enter email" 
                                                                value="{{old('email', $employee->user->email)}}"
                                                                required>
                                                            @if ($errors->has('email'))
                                                                <label class="error">
                                                                    {{ $errors->first('email') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="password">@lang('form.password')</label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-lock"></i>
                                                            </div>
                                                            <input type="password" 
                                                                class="form-control" 
                                                                id="password" name="password" 
                                                                placeholder="Enter password">
                                                            @if ($errors->has('password'))
                                                                <label class="error">
                                                                    {{ $errors->first('password') }}
                                                                </label>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label class="control-label mb-10" 
                                                            for="exampleInputpwd_2">
                                                            @lang('form.retype_password')
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i class="icon-lock"></i>
                                                            </div>
                                                            <input type="password" class="form-control" 
                                                                id="confirm_password" name="confirm_password" 
                                                                placeholder="Retype password">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions mt-10">            
                                                <button type="submit" class="btn btn-success mr-10 mb-30">@lang('form.update_profile')</button>
                                            </div>              
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row -->
        
        <!-- Row -->
       
        <!-- /Row -->
    
    </div>
    
    @include('include.footer')
    
</div>
<!-- /Main Content -->
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script type="text/javascript">
        // validation
        $("#update-form").validate({
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
        // changeDepartment
      
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
                    $('#state').val('{{$employee->state}}');
                });
            }
        }
        $(function(){
            $('#country').val('{{$employee->country}}');
            changeCountry('{{$employee->country}}');
        });
    </script>
@endsection