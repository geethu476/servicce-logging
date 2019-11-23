@extends('layout.form')
@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark"> @lang('form.add') {{$page_name}}</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                <li><a href="javascript:void(0);" 
                            onclick="{{url('/home')}}">@lang('form.dashboard')</a></li>
                             <li><a href="javascript:void(0);" 
                            onclick=" '{{url('/product')}}">
                <span>{{$page_name}} @lang('form.list')</span></a></li>
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
                                <form method="post" action="{{url('product')}}"
                                    enctype="multipart/form-data" id="add-form">
                                    <input name="_token" type="hidden"
                                        value="{{ csrf_token() }}"/>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="category_id">
                                                    @lang('form.category')
                                                </label>
                                                <select class="form-control chosen-input" id="category_id"
                                                    name="category_id" required>
                                                    <option value="">-- select category --</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">
                                                            {{$category->title}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('category_id'))
                                                    <label class="error">
                                                        {{ $errors->first('category_id') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="name">
                                                  @lang('form.name')
                                                </label>
                                                <input type="text" class="form-control"
                                                    name="name" id="name"
                                                    placeholder="Enter name"
                                                    value="{{old('name')}}" required>
                                                @if ($errors->has('name'))
                                                    <label class="error">
                                                        {{ $errors->first('name') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="is_variant">
                                                    Variant Status
                                                </label>
                                                <select class="form-control chosen-input"
                                                    id="is_variant" name="is_variant" 
                                                    onchange="changeVariantStatus(this.value)" 
                                                    required>
                                                    <option value="disabled">
                                                        Disabled
                                                    </option>
                                                    <option value="enabled">
                                                        Enabled
                                                    </option>
                                                </select>
                                                @if ($errors->has('is_variant'))
                                                    <label class="error">
                                                        {{ $errors->first('is_variant') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="price">
                                                    Base Price
                                                </label>
                                                <input type="number" class="form-control"
                                                    name="price" id="price"
                                                    placeholder="Enter price"
                                                    value="{{old('price')}}" required>
                                                @if ($errors->has('price'))
                                                    <label class="error">
                                                        {{ $errors->first('price') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="control-label mb-10 text-left"
                                                    for="avatar">
                                                    @lang('form.image')
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
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="opening_balance">
                                                   Opening Balance
                                                </label>
                                                <input type="number" class="form-control"
                                                    name="opening_balance" id="opening_balance"
                                                    placeholder="Enter opening balance"
                                                    value="{{old('opening_balance')}}" required>
                                                @if ($errors->has('opening_balance'))
                                                    <label class="error">
                                                        {{ $errors->first('opening_balance') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="unit_type">
                                                    @lang('form.unit_type')
                                                </label>
                                                <select class="form-control chosen-input" id="unit_type"
                                                    name="unit_type" required>
                                                    <option value="">-- select unit type --</option>
                                                    <option value="0">@lang('form.number')</option>
                                                    <option value="1">@lang('form.weight')</option>
                                                </select>
                                                @if ($errors->has('unit_type'))
                                                    <label class="error">
                                                        {{ $errors->first('unit_type') }}
                                                    </label>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10 text-left"
                                                    for="description">
                                                  @lang('form.description')
                                                </label>
                                                <textarea class="form-control" 
                                                    id="description" name="description"
                                                    placeholder="Enter description" 
                                                    style="height: 178px;" 
                                                    >{{old('description')}}</textarea>
                                                @if ($errors->has('description'))
                                                    <label class="error">
                                                        {{ $errors->first('description') }}
                                                    </label>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div id="variant-div" class="row">
                                        <div class="clearfix"></div>
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <input type="text" 
                                                            class="form-control" 
                                                            id="variant_name"  
                                                            placeholder="Enter variant type">
                                                    </th>
                                                    <th>
                                                        <input type="number" 
                                                            class="form-control" 
                                                            id="variant_price" 
                                                            placeholder="Enter price">
                                                    </th>
                                                    <th>
                                                        <button type="button" 
                                                            class="btn btn-sm 
                                                            btn-success btn-anim" 
                                                            onclick="addVariant()">
                                                            <i class="icon-rocket"></i>
                                                            <span class="btn-text">@lang('form.add')</span>
                                                        </button>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Variant Type</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="variant-table-body"></tbody>
                                        </table>
                                    </div>
                                    <div class="form-group mb-0 pull-right">
                                        <button type="submit" class="btn btn-success btn-anim">
                                            <i class="icon-rocket"></i>
                                            <span class="btn-text">@lang('form.submit')</span>
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
        @include('include.footer')
    </div>
</div>
<!-- /Main Content -->
@endsection
@section('styles')
    <style type="text/css">
        #variant-div {
            display: none;
            border: 1px solid;
            padding: 10px;
            margin: 1px;
            background: #ddd;
        }
        #variant-div table th {
            border-bottom: 0px !important;
            text-align: center;
        }
        #variant-div table td {
            color: #000;
            text-align: center;
        }
    </style>
@endsection
@section('scripts')
    <script type="text/javascript">
        // addVariant
        function addVariant() {
            var type = $('#variant_name').val();
            var price = $('#variant_price').val();
            if(type && price) {
                $.get( "/product/variant/type/" + type + "/price/" + price + "/ajax", function( data ) {
                    $('#variant-table-body').prepend(data);
                    $('#variant_name').val('');
                    $('#variant_price').val('');
                    $('#variant-table').show();
                });
            }
        }
        // validation
        $("#add-form").validate({
            rules: {
                name: {
                    maxlength: 50,
                    minlength: 3,
                    IsAlphaSpace: true
                },
                code: {
                    maxlength: 50,
                    minlength: 3,
                    IsAlphaNumSpace: true
                },
                price: {
                    min: 1
                },
                description: {
                    maxlength: 500,
                    minlength: 5
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
        // changeVariantStatus
        function changeVariantStatus(status) {
            if(status == 'disabled') {
                $('#variant-div').hide();
            } else {
                $('#variant-div').show();
            }
        }
    </script>
@endsection
