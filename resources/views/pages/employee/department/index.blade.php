@extends( 'layout.form')
@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h5 class="txt-dark">{{$page_name}}</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="javascript:void(0);" 
                            onclick="{{url('/home')}}">@lang('form.dashboard')</a></li>                    
                    <li class="active"><span> @lang('form.add') {{$page_name}}</span></li>
                </ol>
            </div>
            <!-- /Breadcrumb -->
        </div>
        <!-- /Title -->
        <!-- Row -->
        <div class="row">
            <div class="col-lg-4 col-xl-3">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <div id="navigation">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>@lang('form.add') {{$page_name}}</h5>
                                        <div class="card-header-right">
                                            <i class="icofont icofont-navigation-menu"></i>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <form method="post" action="{{url('/department')}}" 
                                            id="add-form">
                                            <input name="_token" type="hidden" 
                                                value="{{ csrf_token() }}"/>
                                            <div class="form-group mt-30 ">
                                                <label class="control-label mb-10 text-left">
                                                   @lang('form.department_title')
                                                </label>
                                                <input type="text" class="form-control" 
                                                    placeholder="Enter department title"
                                                    name="title" value="{{old('title')}}" 
                                                    required>
                                                @if ($errors->has('title'))
                                                    <label class="error">
                                                        {{ $errors->first('title') }}
                                                    </label>
                                                @endif
                                            </div>              
                                            <button type="submit" class="btn btn-success 
                                                btn-anim">
                                                <i class="icon-rocket"></i>
                                                <span class="btn-text">@lang('form.add')</span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="panel panel-default card-view">
                    <div class="panel-wrapper collapse in">
                        <div class="panel-body">
                            <!-- Edit With Button card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{$page_name}} @lang('form.list')</h5>                                                                
                                </div>
                                <div class="table-wrap table-bordered mt-40">
                                
                                    <div class="table-responsive">
                                        <table class="table mb-0 dataTable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>@lang('form.department_title')</th>
                                                    <th class="no-sort no-export">@lang('form.change')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($departments as $key => $department)
                                                    <tr>
                                                        <th>{{++$key}}</th>
                                                        <td>{{$department->title}}</td>
                                                        <td class="text-nowrap">
                                                            <a class="pull-left inline-block mr-15"    
                                                                href="javascript:void(0)" title="Edit" 
                                                                onclick="openModal('{{$department->id}}', '{{$department->title}}')">
                                                                <i class="fa fa-pencil text-inverse m-r-10"></i>
                                                            </a>
                                                            <a href="{{url('/department/' . $department->id . '/destroy')}}" 
                                                                data-toggle="tooltip" 
                                                                data-original-title="Delete" 
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
                            <!-- Edit With Button card end -->      
                            <!-- Modal -->
                            <div aria-hidden="true" role="dialog" tabindex="-1" 
                                id="myModal" class="modal fade type-modal" style="display: none;">
                                <form class="form-horizontal form-material" 
                                    method="post" id="update-form">
                                    {{ method_field('PUT') }}
                                    <input name="_token" type="hidden" 
                                        value="{{ csrf_token() }}"/>
                                    <input type="hidden" name="id" id="id">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title" id="myModalLabel">
                                                    @lang('form.edit') {{$page_name}}
                                                </h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <div class="col-md-12 mb-20">
                                                        <label class="control-label mb-10 
                                                            text-left">
                                                            @lang('form.department_title')
                                                        </label>
                                                        <input type="text" class="form-control" 
                                                            placeholder="Enter department title"
                                                            name="update_title" id="update_title" 
                                                            required>
                                                        @if ($errors->has('update_title'))
                                                            <label class="error">
                                                                {{ $errors->first('update_title') }}
                                                            </label>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-info 
                                                    waves-effect">
                                                    @lang('form.update')
                                                </button>
                                                <button type="button" class="btn btn-default 
                                                    waves-effect" data-dismiss="modal">
                                                     @lang('form.cancel')
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </form>
                            </div>
                            <!-- /.modal -->
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
                title: {
                    maxlength: 25,
                    minlength: 3,
                    IsAlphaSpace: true
                }
            }
        });
        $("#update-form").validate({
            rules: {
                update_title: {
                    maxlength: 25,
                    minlength: 3,
                    IsAlphaSpace: true
                }
            }
        });
        // openModal
        function openModal(id, update_title) {
            $( '#update-form' ).attr( 'action', '{{url("/department")}}' + '/' + id );
            $('#id').val(id);
            $('#update_title').val(update_title);
            $('#myModal').modal('show');
        }
        $(function () {
            @if(old('id')) 
                openModal("{{old('id')}}", "{{old('update_title')}}")
            @endif
        });
    </script>
@endsection