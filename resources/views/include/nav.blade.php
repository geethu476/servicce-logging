{{-- Top Menu Items --}}
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="mobile-only-brand pull-left">
        <div class="nav-header pull-left">
            <div class="logo-wrap">
                <a href="{{url('/home')}}">
                   <img class="brand-img mr-10"
                    src="{{-- {{$general_setting->site_favicon}} --}}"
                    alt="brand" style="height:26px;" />
                    <span class="brand-text" style="font-size: 20px;">Service Logging</span>
                </a>
            </div>
        </div>
        <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu"></i></a>
        <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
        <form id="search_form" role="search" 
            class="top-nav-search collapse pull-left pt-5">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="SEARCH" 
                    id="top-bar-search" autocomplete="off">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </span>
                <ul class="list-group"></ul>
            </div>
        </form>
    </div>
    <div id="mobile_only_nav" class="mobile-only-nav pull-right">
        <ul class="nav navbar-right top-nav pull-right">
           {{--  <li class="dropdown app-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="zmdi zmdi-apps top-nav-icon"></i>
                </a>
                <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                    <li>
                        <ul class="app-icon-wrap pa-10">
                              @can('privilege', 'manage_supplier')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('supplier')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-store txt-info"></i>
                                    <span class="block">supplier</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_lead')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('lead')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-male-female txt-warning"></i>
                                    <span class="block">lead</span>
                                </a>
                            </li>
                            @endcan
                              @can('privilege', 'manage_customer')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('customer')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-male-female txt-success"></i>
                                    <span class="block">customer</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_vehicle')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('vehicle')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-bus txt-primary"></i>
                                    <span class="block">vehicle</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_driver')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('driver')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-account txt-info"></i>
                                    <span class="block">driver</span>
                                </a>
                            </li>
                            @endcan
                              @can('privilege', 'manage_vehicle')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('current-location')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-map txt-warning"></i>
                                    <span class="block">track</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_raw_material')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('raw-material')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-shape txt-danger"></i>
                                    <span class="block">material</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_product')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('product')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-shape txt-warning"></i>
                                    <span class="block">products</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_process')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('process')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-shape"></i>
                                    <span class="block">production</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_sales')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('sale')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-money-box txt-success"></i>
                                    <span class="block">sales</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_purchase')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('purchase')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-card  txt-warning"></i>
                                    <span class="block">purchase</span>
                                </a>
                            </li>
                            @endcan
                              @can('privilege', 'manage_accounting')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('account')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-file-text txt-info"></i>
                                    <span class="block">accounts</span>
                                </a>
                            </li>
                            @endcan
                        </ul>
                    </li>
                </ul>
            </li> --}}
          {{--   <li class="dropdown app-drp">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="zmdi zmdi-plus top-nav-icon"></i>
                </a>
                <ul class="dropdown-menu app-dropdown" data-dropdown-in="slideInRight" data-dropdown-out="flipOutX">
                    <li>
                        <ul class="app-icon-wrap pa-10">
                              @can('privilege', 'manage_supplier')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('supplier/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-store txt-info"></i>
                                    <span class="block">supplier</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_lead')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('lead/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-male-female txt-warning"></i>
                                    <span class="block">lead</span>
                                </a>
                            </li>
                            @endcan
                             @can('privilege', 'manage_customer')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('customer/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-male-female txt-success"></i>
                                    <span class="block">customer</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_vehicle')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('vehicle/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-bus txt-primary"></i>
                                    <span class="block">vehicle</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_driver')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('driver/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-account txt-info"></i>
                                    <span class="block">driver</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_raw_material')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('raw-material/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-shape txt-danger"></i>
                                    <span class="block">material</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_product')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('product/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-shape txt-warning"></i>
                                    <span class="block">products</span>
                                </a>
                            </li>
                            @endcan
                            @can('privilege', 'manage_process')

                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('process/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-shape"></i>
                                    <span class="block">production</span>
                                </a>
                            </li> 
                            @endcan
                            @can('privilege', 'manage_employee')
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('employee/create')}}')" 
                                    class="connection-item">
                                    <i class="zmdi zmdi-group-work txt-info"></i>
                                    <span class="block">employee</span>
                                </a>
                            </li>   
                            @endcan
                        </ul>
                    </li>
                </ul>
            </li> --}}
            <li class="dropdown alert-drp"
                data-url="{{url('notification/unread')}}"
                id="notification"></li>
            <li class="dropdown auth-drp">
                <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown">
                    <img src="{{-- {{Auth::user()->userable->avatar_url}} --}}"
                        alt="user_auth" class="user-auth-img img-circle"/>
                    <span class="user-online-status"></span>
                </a>
                <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX"
                    data-dropdown-out="flipOutX">
                    <li>
                        <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('user/profile')}}')">
                       <i class="zmdi zmdi-account"></i><span>Profile</span></a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="zmdi zmdi-power"></i>
                            <span>Log Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<!-- /Top Menu Items -->

<!-- Left Sidebar Menu -->
<div class="fixed-sidebar-left">
    <ul class="nav navbar-nav side-nav nicescroll-bar">
        <li class="navigation-header">
            <span>Main</span>
            <i class="zmdi zmdi-more"></i>
        </li>
        <li>
            <a href="{{url('/home')}}">
                <div class="pull-left">
                    <i class="zmdi zmdi-landscape mr-20"></i>
                    <span class="right-nav-text">Dashboard</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
         <li><hr class="light-grey-hr mb-10"></li>
            <li class="navigation-header">
                <span>Employee Management </span> 
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#supl_dr">
                    <div class="pull-left">
                        <i class="zmdi zmdi-store mr-20"></i>
                        <span class="right-nav-text">Employee</span>
                    </div>
                    <div class="pull-right">
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul id="supl_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="{{url('/branch')}}"
                            class="spa-nav-link">
                            Branch
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/employee')}}"
                            class="spa-nav-link">
                           Employees
                        </a>
                    </li>
                </ul>
            </li>
             <li><hr class="light-grey-hr mb-10"></li>
            <li class="navigation-header">
                <span>Stock </span> 
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                 <a href="{{url('/product')}}">

                    <div class="pull-left">
                        <i class="zmdi zmdi-account mr-20"></i>
                        <span class="right-nav-text">@lang('nav.product')</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
       
       {{--  @can('privilege_group', 'crm')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#crm_dr">
                    <div class="pull-left">
                        <i class="zmdi zmdi-male-female mr-20"></i>
                        <span class="right-nav-text">
                            CRM
                        </span>
                    </div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="crm_dr" class="collapse collapse-level-1 two-col-list">
                    @can('privilege', 'manage_advertisement')
                        <li>
                            <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/advertisement')}}')">@lang('nav.advertisements')</a>
                        </li>
                    @endcan
                    @can('privilege', 'manage_lead')
                        <li>
                             <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/lead')}}')">
                            @lang('nav.leads')</a>
                        </li>
                    @endcan
                    @can('privilege', 'manage_customer')
                        <li>
                            <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/customer')}}')">


                            @lang('nav.customers')</a>
                        </li>
                    @endcan
                    @can('privilege', 'crm_setting')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#crm_setting_dr">
                                @lang('nav.settings')
                                <div class="pull-right">
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="crm_setting_dr" class="collapse collapse-level-2">
                                <li>
                                     <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/advertisement-type')}}')">

                                        @lang('nav.advertisement_type')
                                    </a>
                                </li>
                                <li>
                                     <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/lead-source')}}')">

                                        @lang('nav.lead_source')
                                    </a>
                                </li>
                                <li>
                                      <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/customer-type')}}')">


                                        @lang('nav.customer_type')
                                    </a>
                                </li>
                                <li>

                                     <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/follow-up-type')}}')">
                                        @lang('nav.follow_up_type')
                                    </a>
                                </li>
                                <li>
                                      <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/follow-up-status')}}')">

                                        @lang('nav.follow_up_status')
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan --}}
       {{--  @can('privilege', 'manage_vehicle')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#veh_dr">
                    <div class="pull-left">
                        <i class="zmdi zmdi-bus mr-20"></i>
                        <span class="right-nav-text">@lang('nav.vehicle')</span>
                    </div>
                    <div class="pull-right">
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul id="veh_dr" class="collapse collapse-level-1">
                    <li>
                          <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/vehicle')}}')">
                      @lang('nav.vehicles')</a>
                    </li>
                     <li>
                          <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/current-location')}}')">
                       Vehicles Locations</a>
                    </li>
                </ul>
            </li>
        @endcan --}}
        {{-- @can('privilege', 'manage_driver')
            <li>
                 <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/driver')}}')">

                    <div class="pull-left">
                        <i class="zmdi zmdi-account mr-20"></i>
                        <span class="right-nav-text">@lang('nav.driver')</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
        @endcan --}}

      {{--   @can('privilege_group', 'stock')
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#stock_dr">
                <div class="pull-left">
                    <i class="zmdi zmdi-shape mr-20"></i>
                    <span class="right-nav-text">@lang('nav.stock')</span>
                </div>
                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="stock_dr" class="collapse collapse-level-1 two-col-list">
                @can('privilege', 'manage_raw_material')
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#raw_dr">
                           @lang('nav.raw_material_managenent')
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="raw_dr" class="collapse collapse-level-2">
                            <li>
                                 <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/raw-material-category')}}')">
                             @lang('nav.categories')</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/raw-material')}}')">
                              @lang('nav.raw_materials')</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/raw-material/report/stock')}}')">
                                    Stock Report
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('privilege', 'manage_product')
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#prod_dr">
                           @lang('nav.product_management')
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="prod_dr" class="collapse collapse-level-2">
                            <li>
                                 <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/category')}}')">
                              @lang('nav.categories')</a>
                            </li>
                            <li>
                                   <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/product')}}')">
                              @lang('nav.products')</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/product/report/stock')}}')">
                                    Stock Report
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('privilege', 'manage_asset')
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" 
                            data-target="#asset_dr">
                           @lang('nav.asset_management')
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="asset_dr" class="collapse collapse-level-2">
                            <li>
                                 <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/asset-category')}}')">
                              @lang('nav.categories')</a>
                            </li>
                            <li>
                                   <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/asset')}}')">
                              @lang('nav.assets')</a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can('privilege', 'manage_process')
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse"
                            data-target="#process_dr">
                             @lang('nav.production_management')
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="process_dr" class="collapse collapse-level-2">
                            <li>
                                  <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/process')}}')">
                               @lang('nav.process')</a>
                            </li>
                            <li>
                                 <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/process-schedule')}}')">
                              @lang('nav.process_schedule')</a>
                            </li>
                        </ul>
                    </li>
                @endcan
            </ul>
          </li>
        @endcan --}}
      {{--   @if(Gate::check('privilege', 'manage_sales') || Gate::check('privilege', 'manage_purchase') || Gate::check('privilege_group', 'order') || Gate::check('privilege_group', 'trip') || Gate::check('privilege', 'manage_accounting'))
            <li><hr class="light-grey-hr mb-10"></li>
            <li class="navigation-header">
                <span>business</span> 
                <i class="zmdi zmdi-more"></i>
            </li>
        @endif --}}
      {{--   @can('privilege', 'manage_sales')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#sales_dr">
                    <div class="pull-left">
                        <i class="fa fa-tags mr-20"></i>
                        <span class="right-nav-text">@lang('nav.sales')</span>
                    </div>
                    <div class="pull-right">
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul id="sales_dr" class="collapse collapse-level-1">
                     <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/create-invoice/create')}}')">
                            Create Invoice
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/purchase-reference')}}')">
                            Purchase Reference
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/order')}}')">
                            Sales Orders
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale')}}')">
                            Sales
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/invoice')}}')">
                            Sales Invoices
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/pending-payment')}}')">
                            Pending Payments
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/return')}}')">
                            Sales Return
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('sale/invoice/statement-of-account/list')}}')">
                            Statement Of Accounts
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" 
                            data-target="#sale_report_dr">
                            Reports
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="sale_report_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('sale/report/pending-payment-report')}}')">
                                    Pending Report
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('sale/report/sale-order-report')}}')">
                                    Order Report
                                </a>
                            </li> 
                            <li>
                                <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('sale/report/customer-payment-report')}}')">
                                    Customer Report
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('sale/report/return')}}')">
                                    Return Report
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan --}}

      {{--   @can('privilege', 'manage_purchase')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#purchase_dr">
                    <div class="pull-left">
                        <i class="fa fa-credit-card mr-20"></i>
                        <span class="right-nav-text">
                            Purchase
                        </span>
                    </div>
                    <div class="pull-right">
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul id="purchase_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('purchase/order')}}')">
                            Purchase Orders
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('purchase')}}')">
                            Purchase
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('purchase/invoice')}}')">
                            Purchase Invoices
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('purchase/pending-payment')}}')">
                            Pending Payments
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('purchase/return')}}')">
                            Purchase Return
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse"
                            data-target="#purchase_report_dr">
                            Reports
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="purchase_report_dr" class="collapse collapse-level-2">
                            <li>
                                <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('purchase/report/pending-payment-report')}}')">
                                    Pending Report
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('purchase/report/purchase-order-report')}}')">
                                   Order Report
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('purchase/report/supplier-payment-report')}}')">
                                    Supplier Report
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" 
                                    onclick="spaRouteLoad('form', '{{url('purchase/report/return')}}')">
                                    Return Report
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        @endcan --}}
       {{--  @can('privilege', 'sales_order_delivery')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#order_dr">
                    <div class="pull-left">
                      <i class="fa fa-shopping-cart mr-20"></i>
                        <span class="right-nav-text">
                            Order
                        </span>
                    </div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="order_dr" class="collapse collapse-level-1 two-col-list">
                    <li>
                         <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/order')}}')">
                        @lang('nav.orders')</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" 
                            data-target="#order_setting_dr">
                            @lang('nav.settings')
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="order_setting_dr" class="collapse collapse-level-2">
                            <li>
                                 <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('order-status')}}')">

                                    Order Status
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </li>
        @endcan --}}
     {{--    @can('privilege_group', 'trip')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#trip_dr">
                    <div class="pull-left">
                      <i class="fa fa-truck mr-20"></i>
                        <span class="right-nav-text">
                            Trip
                        </span>
                    </div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="trip_dr" class="collapse collapse-level-1 two-col-list">
                    @can('privilege', 'trips')
                        <li>

                              <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/trip')}}')">
                           trips</a>
                        </li>
                    @endcan

                    @can('privilege', 'crm_setting')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#trip_setting_dr">
                                @lang('nav.settings')
                                <div class="pull-right">
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="trip_setting_dr" class="collapse collapse-level-2">
                                <li>
                                       <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/trip-status')}}')">

                                        Trip Status
                                    </a>
                                </li>

                            </ul>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan --}}
       {{--   @can('privilege', 'manage_accounting')
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" 
                    data-target="#accouting_dr">
                    <div class="pull-left">
                        <i class="fa fa-tags mr-20"></i>
                        <span class="right-nav-text">Accounting</span>
                    </div>
                    <div class="pull-right">
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <ul id="accouting_dr" class="collapse collapse-level-1">
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/expense-type')}}')">
                            Expense Type
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/expense')}}')">
                            Expense 
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/ledger-sub-group')}}">
                           Ledger Group
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/ledger')}}">
                           Ledger
                        </a>
                    </li>



                     <li>
                        <a href="javascript:void(0);" 
                            onclick="spaRouteLoad('form', '{{url('/cashbook')}}')">
                           Cash Book
                        </a>
                    </li>
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" 
                            data-target="#accouting_report_dr">
                            Reports
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="accouting_report_dr" class="collapse collapse-level-2">
                            <li>
                                 <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/accounting/report/trial-balance/all')}}')">

                                Trial Balance
                                </a>
                            </li>
                             <li>
                                 <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/accounting/report/profit-loss/all')}}')">

                                  Profit & Loss
                                </a>
                            </li>

                             <li>
                                     <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('accounting/report/balance-sheet/all')}}')">

                                 Balance Sheet
                                </a>
                            </li> 
                          
                              <li>
                                 <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/accounting/report/input-output/all')}}')">

                                  Input Output Tax
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- <li>

                        <a href="javascript:void(0);" data-toggle="collapse" 
                            data-target="#accouting_report_dr">
                            Reports
                            <div class="pull-right">
                                <i class="zmdi zmdi-caret-down"></i>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="accouting_report_dr" class="collapse collapse-level-2">
                            <li>
                                 <a href="{{url('/ledger-report')}}">

                                Ledger Report
                                </a>
                            </li>
                            <li>
                                 <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/accounting/report/balance-sheet/all')}}')">

                                 Balance Sheet
                                </a>
                            </li> 
                           <li>
                                 <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/accounting/report/profit-loss/all')}}')">
                   
                  
                    <li>
                        <a href="{{url('/ledger-sub-group')}}">
                            Ledger Group
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/journals')}}">
                            Voucher
                        </a>
                    </li>

                    </li> 


                                  Input Output Tax
                                </a>
                            </li>
                        </ul>
                    </li>  -->

                </ul>
            </li>
        @endcan --}}
      
      {{--   @can('privilege_group', 'hr')
            <li><hr class="light-grey-hr mb-10"></li>
            <li class="navigation-header">
                <span>employee</span> 
                <i class="zmdi zmdi-more"></i>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#hr_dr">
                    <div class="pull-left">
                        <i class="zmdi zmdi-group-work mr-20"></i>
                        <span class="right-nav-text">@lang('nav.hr')</span>
                    </div>
                    <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="hr_dr" class="collapse collapse-level-1 two-col-list">
                    @can('privilege', 'manage_employee')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#emp_dr">
                                @lang('nav.employee_management')
                                <div class="pull-right">
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="emp_dr" class="collapse collapse-level-2">
                                <li>
                                      <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/department')}}')">
                                  @lang('nav.departments')</a>
                                </li>
                                <li>
                                      <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/designation')}}')">
                                   @lang('nav.designations')</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/employee')}}')">
                                   @lang('nav.employees')</a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    @can('privilege', 'manage_leave')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#leave_dr">
                                <div class="pull-left">

                                    <span class="right-nav-text">Leave</span>
                                </div>
                                <div class="pull-right">
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="leave_dr" class="collapse collapse-level-1">
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('holiday-calendar')}}')">Holiday Calendar
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('/leave')}}')">
                                        Mark Leave
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('/leave/set-leave')}}')">
                                        Set Leave
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('/leave-type')}}')">
                                        Leave Type
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                    @can('privilege', 'manage_salary')
                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#salary_dr">
                                <div class="pull-left">

                                    <span class="right-nav-text">salary Management</span>
                                </div>
                                <div class="pull-right">
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="salary_dr" class="collapse collapse-level-1">
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('/salary/disbursal')}}')">
                                        Salary Disbursal
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('/salary/split')}}')">
                                        Split
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#report">
                                <div class="pull-left">

                                    <span class="right-nav-text">Report</span>
                                </div>
                                <div class="pull-right">
                                    <i class="zmdi zmdi-caret-down"></i>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                            <ul id="report" class="collapse collapse-level-1">
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('salary/disbursal/report')}}')">Disbursal Report
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('salary/deduction/report')}}')">Deduction Report
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"
                                        onclick="spaRouteLoad('form', '{{url('/leave/report')}}')">
                                        Leave Report
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" 
                                        onclick="spaRouteLoad('form', '{{url('/attendance/log')}}')">
                                        Attendance Logs
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan --}}
       {{--  <li>
             <a href="javascript:void(0);"
                        onclick="spaRouteLoad('form', '{{url('/task')}}')">

                <div class="pull-left">
                    <i class="glyphicon glyphicon-edit mr-20"></i>
                    <span class="right-nav-text">@lang('nav.task')</span>
                </div>
                <div class="clearfix"></div>

            </a>
        </li>
        @can('privilege', 'manage_target')
            <li>
                 <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/target')}}')">

                    <div class="pull-left">
                        <i class="zmdi zmdi-hospital mr-20"></i>
                        <span class="right-nav-text">Target</span>
                    </div>
                    <div class="clearfix"></div>

                </a>
            </li>

        @endcan
        <li>
              <a href="javascript:void(0);"
                            onclick="spaRouteLoad('form', '{{url('/attendance')}}')">

                <div class="pull-left">
                    <i class="zmdi zmdi-account mr-20"></i>
                    <span class="right-nav-text">
                        Check In/Out
                    </span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li> --}}
        {{-- @if(Auth::user()->userable_type == "admin")
            <li><hr class="light-grey-hr mb-10"></li>
            <li class="navigation-header">
                <span>settings</span> 
                <i class="zmdi zmdi-more"></i>
            </li>
             <li>
                <a href="javascript:void(0);" 
                    onclick="spaRouteLoad('form', '{{url('/finance-setting')}}')">
                    <div class="pull-left">
                        <i class="fa fa-gears mr-20"></i>
                        <span class="right-nav-text">
                            @lang('nav.finance_setting')
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" 
                    onclick="spaRouteLoad('form', '{{url('/privilege')}}')">
                    <div class="pull-left">
                        <i class="fa fa-universal-access mr-20"></i>
                        <span class="right-nav-text">
                            @lang('nav.privilege')
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" 
                    onclick="spaRouteLoad('form', '{{url('/tax-type')}}')">
                    <div class="pull-left">
                        <i class="fa fa-percent mr-20"></i>
                        <span class="right-nav-text">
                            @lang('nav.tax_types')
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" 
                    onclick="spaRouteLoad('form', '{{url('/login-log')}}')">
                    <div class="pull-left">
                        <i class="fa fa-sign-in mr-20"></i>
                        <span class="right-nav-text">
                            @lang('nav.login_logs')
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" 
                    onclick="spaRouteLoad('form', '{{url('/general-setting')}}')">
                    <div class="pull-left">
                        <i class="fa fa-gears mr-20"></i>
                        <span class="right-nav-text">
                            @lang('nav.general')
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" 
                    onclick="spaRouteLoad('form', '{{url('/currency')}}')">
                    <div class="pull-left">
                        <i class="fa fa-money mr-20"></i>
                        <span class="right-nav-text">
                            Currency
                        </span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
        @endif --}}
    </ul>
</div>
<!-- /Left Sidebar Menu -->
<style type="text/css">
    .fixed-sidebar-left .side-nav {
        padding-bottom: 50px;
    }
</style>