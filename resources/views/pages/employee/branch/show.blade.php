@extends('layout.form')
@section('content')
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Title -->
        <div class="row heading-bg">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h5 class="txt-dark">{{$page_name}} @lang('form.details')</h5>
            </div>
            <!-- Breadcrumb -->
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">@lang('form.dashboard')</a></li>
                    <li><a href="{{url('/branch')}}"><span>{{$page_name}} @lang('form.list') </span></a></li>
                    <li class="active"><span>@lang('form.detail')</span></li>
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
                            <div  class="pills-struct mt-20">
                                <div class="tab-content" id="myTabContent_11">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="panel panel-warning contact-card card-view">
                                            <div class="panel-heading">
                                                <div class="pull-left">
                                                    <div class="pull-left user-img-wrap mr-15">
                                                        <img class="card-user-img img-circle pull-left" src="{{url('storage-file/' . $branch->avatar)}}" alt="user"/>
                                                    </div>
                                                    <div class="pull-left user-detail-wrap">
                                                        <span class="block card-user-name">
                                                            {{$branch->name}}
                                                        </span>
                                                        <span class="block card-user-desn">
                                                            {{$branch->description}}
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    <a class="pull-left inline-block mr-15"
                                                        href="#myModal" data-toggle="modal"
                                                        title="Edit">
                                                        <i class="zmdi zmdi-edit txt-light"></i>
                                                    </a>
                                                    <a class="pull-left inline-block mr-15"
                                                        href="{{url('/branch/' . $branch->id . '/destroy')}}" onclick="return confirm('Are you sure?')" title="Delete">
                                                        <i class="zmdi zmdi-delete txt-light"></i>
                                                    </a>
                                                    <div class="pull-left inline-block dropdown">
                                                        {{-- <a class="dropdown-toggle"
                                                            data-toggle="dropdown"
                                                            href="#" aria-expanded="false"
                                                            role="button">
                                                            <i class="zmdi zmdi-more-vert txt-light"></i>
                                                        </a> --}}
                                                        <ul class="dropdown-menu bullet
                                                            dropdown-menu-right"
                                                            role="menu">
                                                            <li role="presentation">
                                                                <a href="javascript:void(0)"
                                                                    role="menuitem">
                                                                    <i class="icon wb-share"
                                                                        aria-hidden="true"></i>
                                                                    Send Message
                                                                </a>
                                                            </li>
                                                            <li role="presentation">
                                                                <a href="javascript:void(0)"
                                                                    role="menuitem">
                                                                    <i class="icon wb-trash"
                                                                        aria-hidden="true"></i>
                                                                    Follow
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="panel-wrapper collapse in col-lg-7
                                                col-md-7 col-sm-6 col-xs-12">
                                                <h5 class="text-muted mt-20 ">{{$page_name}} @lang('form.details')</h5>
                                                <div class="panel-body row">
                                                    <div class="user-others-details pl-15 pr-15">
                                                        <table class="table table-borderless
                                                            table-condensed">
                                                            <tr>
                                                                <td>
                                                                    @lang('form.name')
                                                                </td>
                                                                <td>
                                                                    <span class="inline-block
                                                                        txt-dark">
                                                                        {{$branch->name}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    @lang('form.created_by')
                                                                </td>
                                                                <td>
                                                                    <span class="inline-block
                                                                        txt-dark">
                                                                        {{$branch->creator->userable->name}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                @lang('form.branch_location')
                                                                </td>
                                                                <td>
                                                                    <span class="inline-block
                                                                        txt-dark">
                                                                        {{$branch->location}}
                                                                    </span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                               <td>
                                                                @lang('form.branch_city')
                                                               </td>
                                                               <td>
                                                                    <span class="inline-block
                                                                        txt-dark">
                                                                        {{$branch->city}}
                                                                    </span>
                                                               </td>
                                                           </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-wrapper collapse in col-lg-5
                                                col-md-5 col-sm-6 col-xs-12">
                                                <h5 class="text-muted mt-20 ">@lang('form.contact_ details')</h5>
                                                <div class="panel-body row">
                                                    <div class="user-others-details pl-15 pr-15">
                                                        <div class="mb-15">
                                                            <i class="zmdi zmdi-email-open inline-block mr-10"></i>
                                                            <span class="inline-block txt-dark">
                                                                {{$branch->name}}
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <i class="zmdi zmdi zmdi-home inline-block mr-10"></i>
                                                            @lang('form.address')<br>
                                                            <span class="inline-block txt-dark">
                                                                {!!nl2br($branch->address)!!}
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="inline-block txt-dark">
                                                                {{$branch->city}}
                                                            </span>
                                                        </div>
                                                        <div>
                                                           {{--  <span class="inline-block txt-dark">
                                                                {{dougsiskStateName($branch->state, $branch->country)}}
                                                            </span> --}}
                                                        </div>
                                                        <div>
                                                           {{--  <span class="inline-block txt-dark">
                                                                {{dougsiskCountryName($branch->country)}}
                                                            </span> --}}
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
        <!-- Modal -->
        <div aria-hidden="true" role="dialog" tabindex="-1"
            id="myModal" class="modal fade"
            style="display: none;">
            <form class="form-horizontal form-material"
                method="post" action="{{url('branch/' . $branch->id)}}"
                enctype="multipart/form-data" id="update-form">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">@lang('form.edit') {{$page_name}}</h4>
                        </div>
                        <div class="modal-body">
                            {{ method_field('PUT') }}
                            <input name="_token" type="hidden"
                                value="{{ csrf_token() }}"/>
                            <input type="hidden" name="id" value="{{$branch->id}}">
                            <input type="hidden" name="latitude" value="{{$branch->latitude}}">
                            <input type="hidden" name="longitude" value="{{$branch->longitude}}">
                            <div class="form-group mb-5">
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="name">
                                       @lang('form.name')
                                        <span class="error-star">
                                                   *
                                        </span>
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter branch name"
                                        name="name" id="name"
                                        value="{{old('name', $branch->name)}}"
                                        required>
                                    @if ($errors->has('name'))
                                        <label class="error">
                                            {{ $errors->first('name') }}
                                        </label>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="description">
                                        @lang('form.description')
                                    </label>
                                    <textarea id="description" name="description"
                                        placeholder="Enter description"
                                        class="form-control"
                                        rows="5">{{old('description', $branch->description)}}</textarea>
                                    @if ($errors->has('description'))
                                        <label class="error">
                                            {{ $errors->first('description') }}
                                        </label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="code">
                                       @lang('form.location')
                                        <span class="error-star">
                                                   *
                                        </span>
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter location"
                                        name="location" id="location"
                                        value="{{old('location', $branch->location)}}"
                                        required onkeypress="getLocation(this)">
                                    @if ($errors->has('location'))
                                        <label class="error">
                                            {{ $errors->first('location') }}
                                        </label>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="address">
                                        @lang('form.address')
                                         <span class="error-star">
                                                   *
                                         </span>
                                    </label>
                                    <textarea id="address" name="address"
                                        placeholder="Enter address"
                                        class="form-control" required
                                        rows="5">{{old('address', $branch->address)}}</textarea>
                                    @if ($errors->has('address'))
                                        <label class="error">
                                            {{ $errors->first('address') }}
                                        </label>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-5">
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="avatar">
                                       @lang('form.profile_picture')
                                    </label>
                                    <input type="file" id="avatar" name="avatar">
                                    @if ($errors->has('avatar'))
                                        <label class="error">
                                            {{ $errors->first('avatar') }}
                                        </label>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="country">
                                        @lang('form.country')
                                         <span class="error-star">
                                                   *
                                         </span>
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
                            </div>
                            <div class="form-group mb-5">
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="state">
                                        @lang('form.state')
                                         <span class="error-star">
                                                   *
                                         </span>
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
                                <div class="col-md-6">
                                    <label class="control-label mb-10
                                        text-left" for="city">
                                        City
                                         <span class="error-star">
                                                   *
                                         </span>
                                    </label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter city"
                                        name="city" id="city"
                                        value="{{old('city', $branch->city)}}" required>
                                    @if ($errors->has('city'))
                                        <label class="error">
                                            {{ $errors->first('city') }}
                                        </label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit"
                                class="btn btn-info waves-effect">
                                @lang('form.update')
                            </button>
                            <button type="button" class="btn btn-default waves-effect"
                                data-dismiss="modal">
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
    <!-- /Row -->
    @include('include.footer')
</div>
<!-- /Main Content -->
@endsection

@section('scripts')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&sensor=false&amp;libraries=places&region=in" type="text/javascript"></script>
    <script type="text/javascript">
        // validation
        $("#update-form").validate({
            rules: {
                title: {
                    maxlength: 50,
                    minlength: 3,
                    IsAlphaNumSpace: true
                },
                description: {
                    maxlength: 500,
                    minlength: 5
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
                location: {
                    maxlength: 25,
                    minlength: 3,
                    IsAlphaSpace: true
                },

            },
        });


        function getLocation(arg) {
            var input = document.getElementById(arg.id);
            var autocomplete = new google.maps.places.Autocomplete(input);
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
                 infowindow.close();
                 var place = autocomplete.getPlace();
                 $('#latitude').val(place.geometry.location.lat());
                 $('#longitude').val(place.geometry.location.lng());
                 //var addressData = place.address_components;
                var arrAddress = place.address_components;
                var itemLocality='';

                // iterate through address_component array
                $.each(arrAddress, function (i, address_component) {
                    if (address_component.types[0] == "locality"){
                        //console.log("town:"+address_component.long_name);
                        itemLocality = address_component.long_name;
                        $('#location').val(itemLocality);
                    }
                });
                $('#address').val(place.formatted_address);
             });
        }

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
                    $('#state').val('{{$branch->state}}');
                });
            }
        }
        $(function(){
            $('#country').val('{{$branch->country}}');
            changeCountry('{{$branch->country}}');
            @if(old('id'))
                $('#myModal').modal('show');
            @endif
        });
    </script>
@endsection
