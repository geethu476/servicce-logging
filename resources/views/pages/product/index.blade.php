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
                    <li><a href="javascript:void(0);" 
                            onclick="{{url('/home')}}">@lang('form.dashboard')</a></li>
                    <li class="active"><span>{{$page_name}} @lang('nav.list')</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default card-view">
                    <a href="javascript:void(0);" 
                            onclick="{{url('/product/create')}}" class="btn btn-success btn-anim btn-sm">
                        <i class="icon-plus" title="Add New"></i>
                        <span class="btn-text">@lang('nav.add_new')</span>
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
                                                            <tr>
                                                                <th>@lang('form.serial_no')</th>
                                                                <th>@lang('form.item')</th>
                                                                <th>@lang('form.brand')</th>
                                                                <th>@lang('form.model')</th>
                                                                <th class="no-sort no-export">@lang('form.action')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($products as $key => $product)
                                                                <tr>
                                                                  {{--   <td>{{$product->reference_no}}</td>
                                                                    <td>{{$product->category->title}}</td>
                                                                    <td>{{$product->name}}</td>
                                                                    
                                                                    <td>{{amountDefaultCurrency($product->price)}}</td></td>
                                                                    <td class="text-pwrap">
                                                                        <a href="javascript:void(0);" 
                                                                       onclick="spaRouteLoad('form', '{{url('/product/' . $product->id)}}')"
                                                                        class="mr-25" data-toggle="tooltip" data-original-title="View">
                                                                            <i class="fa fa-eye text-success m-r-10"></i>
                                                                        </a>
                                                                        <a href="{{url('/product/' . $product->id . '/destroy')}}"
                                                                            data-toggle="tooltip" data-original-title="Close"
                                                                            onclick="return confirm('Are you sure?')">
                                                                            <i class="fa fa-close text-danger"></i>
                                                                        </a>
                                                                    </td> --}}
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
