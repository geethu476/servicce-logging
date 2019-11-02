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
                <li><a href="{{url('/')}}">@lang('form.dashboard')</a></li>
                <li><a href="{{url('/branch')}}"><span>{{$page_name}} @lang('form.list')</span></a></li>
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
                                <form method="post" action="{{url('branch')}}" 
                                    enctype="multipart/form-data" id="add-form">
                                    <input name="_token" type="hidden" 
                                        value="{{ csrf_token() }}"/>                                    
                                    <input name="longitude" type="hidden"
                                        value="{{old('longitude')}}" id="longitude">
                                    <div class="col-sm-6">                                        
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="code">
                                               @lang('form.title')
                                               <span class="error-star">
                                                   *
                                               </span>
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
                                        <div class="form-group ">
                                            <label class="control-label mb-10 
                                                    text-left">
                                                    @lang('form.description')
                                            </label>
                                            <textarea name="description"
                                                    class="form-control" rows="3" 
                                                    placeholder="Enter description"
                                                    >{{old('description')}}</textarea>
                                             @if ($errors->has('description'))
                                            <label class="error">
                                                    {{ $errors->first('description') }}
                                            </label>
                                            @endif   
                                        </div>                                        
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="code">
                                               @lang('form.location')
                                               <span class="error-star">
                                                   *
                                               </span>
                                            </label>
                                            <input type="text" class="form-control" 
                                                name="location" id="location" 
                                                placeholder="select location" 
                                                value="{{old('location')}}" required onkeypress="getLocation(this)">
                                            @if ($errors->has('location'))
                                                <label class="error">
                                                    {{ $errors->first('location') }}
                                                </label>
                                            @endif
                                        </div> 
                                        <input name="latitude" type="hidden"
                                        value="{{old('latitude')}}" id="latitude">
                                        @if ($errors->has('latitude'))
                                                <label class="error">
                                                    {{ $errors->first('latitude') }}
                                                </label>
                                        @endif
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="code">
                                               @lang('form.address')
                                               <span class="error-star">
                                                   *
                                               </span>
                                            </label>
                                            <input type="text" class="form-control" 
                                                name="address" id="address" 
                                                placeholder="Enter address" 
                                                value="{{old('address')}}" required>
                                            @if ($errors->has('address'))
                                                <label class="error">
                                                    {{ $errors->first('address') }}
                                                </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">   
                                        <label class="control-label mb-10 text-left"
                                                for="avatar">
                                               @lang('form.picture')
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
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="country">
                                             @lang('form.country')
                                             <span class="error-star">
                                                   *
                                               </span>
                                            </label>
                                            <select class="form-control chosen-input" id="country" 
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
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="state">
                                                @lang('form.state')
                                                <span class="error-star">
                                                   *
                                               </span>
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
                                        <div class="form-group">
                                            <label class="control-label mb-10 text-left" 
                                                for="city">
                                                @lang('form.city')
                                                <span class="error-star">
                                                   *
                                               </span>
                                            </label>
                                            <input type="text" class="form-control" 
                                                id="city" name="city" 
                                                placeholder="Enter city" 
                                                value="{{old('city')}}" required>
                                            @if ($errors->has('city'))
                                                <label class="error">
                                                    {{ $errors->first('city') }}
                                                </label>
                                            @endif
                                        </div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success btn-anim">
                                                <i class="icon-rocket"></i>
                                                <span class="btn-text">@lang('form.submit')</span>
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
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCQV0XNkk6SDcDoKfxxF0lPfSreU0w2FPU&sensor=false&amp;libraries=places&region=in" type="text/javascript"></script>
    <script type="text/javascript">
        // validation
        $("#add-form").validate({
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