@extends('layout.form')
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
                    <li><a href="{{url('/')}}">@lang('form.dashboard')</a></li>
                    <li class="active"><span>{{$page_name}}  @lang('form.list')</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <a href="{{url('/branch/create')}}" class="btn btn-success btn-anim btn-sm">
                        <i class="icon-plus" title="Add New"></i>
                        <span class="btn-text">@lang('form.add_new')</span>
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
                                                            <th>@lang('form.title')</th>
                                                            <th>@lang('form.location')</th>
                                                            <!-- <th>@lang('form.country')</th> -->
                                                            <th>@lang('form.created_by')</th>                                                           
                                                            <th class="no-sort">@lang('form.action')</th>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($branches as $key => $branch)
                                                                <tr>
                                                                    <td>{{++$key}}</td>
                                                                    <td>{{$branch->name}}</td>
                                                                    <td>
                                                                        {{$branch->location}}
                                                                    </td>
                                                                    <!-- <td>
                                                                       {{$branch->country}}
                                                                    </td> -->
                                                                    <td>
                                                                        {{$branch->creator->userable->name}}
                                                                    </td>                                                                    
                                                                    <td class="text-nowrap">
                                                                        <a href="{{url('/branch/' . $branch->id)}}" class="mr-25" data-toggle="tooltip" data-original-title="View">
                                                                            <i class="fa fa-eye text-success m-r-10"></i>
                                                                        </a>
                                                                        @if(Auth::user()->id == $branch->creator_id)
                                                                            <a href="{{url('/branch/' . $branch->id . '/destroy')}}"
                                                                                data-toggle="tooltip" data-original-title="Delete"
                                                                                onclick="return confirm('Are you sure?')">
                                                                                <i class="fa fa-close text-danger"></i>
                                                                            </a>
                                                                        @endif
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
