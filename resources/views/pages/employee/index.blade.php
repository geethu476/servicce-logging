@extends((!Request::ajax() ? 'layout.form' : 'layout.ajax'))
@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">{{$page_name}} @lang('form.list')</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">             
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/home')}}')">@lang('form.dashboard')</a></li>
                    <li class="active"><span>{{$page_name}} @lang('form.list')</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">   
                <div class="panel panel-default card-view">
                      <a href="{{url('/employee/create')}}" class="btn btn-primary">
                        <i class="icon-plus" title="Create"></i>
                        <span class="btn-text">Create</span>
                    </a>
                    </a> 
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body pa-0">
                            <div class="contact-list">
                                <div class="row">
                                    <div class="panel pa-0">
                                        <div class="panel-wrapper collapse in">
                                            <div class="panel-body  pa-0">
                                                <div class="table-responsive mb-30">
                                                    <table class="table display table-hover 
                                                        mb-30 dataTable">
                                                        <thead>
                                                            <th>@lang('form.id')</th>
                                                            <th>@lang('form.name')</th>
                                                            <th>@lang('form.email')</th>
                                                            <th>@lang('form.branch')</th>
                                                            <th class="no-sort no-export">@lang('form.action')</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($employees as $key => $employee)
                                                                <tr>
                                                                    <td>{{++$key}}</td>
                                                                    <td>{{$employee->name}}</td>
                                                                    <td>{{$employee->user->email}}</td>
                                                                    <td>
                                                                        <span class="label 
                                                                            label-success">
                                                                            {{$employee->branch->name}}
                                                                        </span>
                                                                    </td>
                                                                   
                                                                    <td class="text-nowrap">
                                                                         <a href="{{url('/employee/' . $employee->id)}}"
                                                                       class="mr-25" data-toggle="tooltip" data-original-title="View"> 
                                                                            <i class="fa fa-eye text-success m-r-10"></i> 
                                                                        </a>
                                                                        <a href="{{-- {{url('/employee/' . $employee->id . '/destroy')}} --}}" 
                                                                            data-toggle="tooltip" data-original-title="Close" 
                                                                            onclick="return confirm('Are you sure?')"> 
                                                                            <i class="fa fa-close text-danger"></i> 
                                                                        </a> 
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
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
        @include('include.footer')
    </div>
</div>
<!-- /Main Content -->
@endsection