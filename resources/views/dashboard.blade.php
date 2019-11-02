@extends('layout.form')
@section('content')
    <!-- Main Content -->
    <div class="page-wrapper">
        <div class="container-fluid pt-25">

            <!-- Row -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body sm-data-box-1">
                                <span class="uppercase-font weight-500 font-14 block text-center txt-dark">No of Workers in Schedule</span> 
                                <div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
                                    <span class="counter-anim">6</span>
                                </div>
                                <div class="progress-anim mt-20">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100" style="width: 93.12%;"></div>
                                    </div>
                                </div>
                                <ul class="flex-stat mt-5">
                                    <li>
                                        <span class="block">Previous</span>
                                        <span class="block txt-dark weight-500 font-15">79.82</span>
                                    </li>
                                    <li>
                                        <span class="block">% Change</span>
                                        <span class="block txt-dark weight-500 font-15">+14.29</span>
                                    </li>
                                    <li>
                                        <span class="block">Trend</span>
                                        <span class="block">
                                            <i class="zmdi zmdi-trending-up txt-primary font-20"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body sm-data-box-1">
                                <span class="uppercase-font weight-500 font-14 block text-center txt-dark">Absent</span>    
                                <div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
                                    <span class="counter-anim">3</span>
                                </div>
                                <div class="progress-anim mt-20">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100" style="width: 43.12%;"></div>
                                    </div>
                                </div>
                                <ul class="flex-stat mt-5">
                                    <li>
                                        <span class="block">Previous</span>
                                        <span class="block txt-dark weight-500 font-15">79.82</span>
                                    </li>
                                    <li>
                                        <span class="block">% Change</span>
                                        <span class="block txt-dark weight-500 font-15">+14.29</span>
                                    </li>
                                    <li>
                                        <span class="block">Trend</span>
                                        <span class="block">
                                            <i class="zmdi zmdi-trending-up txt-primary font-20"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body sm-data-box-1">
                                <span class="uppercase-font weight-500 font-14 block text-center txt-dark">Next Schedule</span> 
                                <div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
                                    <span class="counter-anim">16</span>
                                </div>
                                <div class="progress-anim mt-20">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100" style="width: 50.12%;"></div>
                                    </div>
                                </div>
                                <ul class="flex-stat mt-5">
                                    <li>
                                        <span class="block">Previous</span>
                                        <span class="block txt-dark weight-500 font-15">79.82</span>
                                    </li>
                                    <li>
                                        <span class="block">% Change</span>
                                        <span class="block txt-dark weight-500 font-15">+14.29</span>
                                    </li>
                                    <li>
                                        <span class="block">Trend</span>
                                        <span class="block">
                                            <i class="zmdi zmdi-trending-up txt-primary font-20"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-default card-view">
                        <div class="panel-wrapper collapse in">
                            <div class="panel-body sm-data-box-1">
                                <span class="uppercase-font weight-500 font-14 block text-center txt-dark">Pending Schedule</span>  
                                <div class="cus-sat-stat weight-500 txt-primary text-center mt-5">
                                    <span class="counter-anim">32</span>
                                </div>
                                <div class="progress-anim mt-20">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="93.12" aria-valuemin="0" aria-valuemax="100" style="width: 80.12%;"></div>
                                    </div>
                                </div>
                                <ul class="flex-stat mt-5">
                                    <li>
                                        <span class="block">Previous</span>
                                        <span class="block txt-dark weight-500 font-15">79.82</span>
                                    </li>
                                    <li>
                                        <span class="block">% Change</span>
                                        <span class="block txt-dark weight-500 font-15">+14.29</span>
                                    </li>
                                    <li>
                                        <span class="block">Trend</span>
                                        <span class="block">
                                            <i class="zmdi zmdi-trending-up txt-primary font-20"></i>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @include('include.footer')

    </div>
    <!-- /Main Content -->

@endsection

@section('styles')
    <!-- Morris Charts CSS -->
    <link href="{{url('resources/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
    <!-- bootstrap-select CSS -->
    <link href="{{url('resources/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css"/>
    <style type="text/css">
        #sales_purchase_chart {
            height: 220px;
        }
        
        #chart_1 {
            height: 488px !important;
        }
        .progress-bar-primary {
    background: #1ca8b4  !important;
}
.txt-primary, .text-primary {
    color: #1ca8b4 !important;
}
    </style>
@endsection

@section('scripts')
    <!-- EasyPieChart JavaScript -->
    <script src="{{url('resources/vendors/bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{url('resources/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{url('resources/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Bootstrap Select JavaScript -->
    <script src="{{url('resources/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- ChartJS JavaScript -->
    <script src="{{url('resources/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- This is a copy of palette.js -->
    {{-- <script src="{{url('js/palette.js')}}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/google-palette@1.1.0/palette.min.js"></script>
    <script type="text/javascript">

        function productMaterialPirChart() {
            $.get( "/dashboard/product/stock/chart/json", function( data ) {
                // product_stock_chart
                var product_stock_chart = document.getElementById("product_stock_chart").getContext("2d");

                var product_stock_chart_label = data.name;

                var product_stock_chart_value = data.stock;

                var product_stock_chart_data = {
                     labels: product_stock_chart_label,
                datasets: [
                    {
                        data: product_stock_chart_value,
                        backgroundColor: palette('tol', product_stock_chart_value.length).map(function(hex) {
                            return '#' + hex;
                        })
                    }]
                };
                
                var pieChart  = new Chart(product_stock_chart,{
                    type: 'pie',
                    data: product_stock_chart_data,
                    options: {
                        animation: {
                            duration:   3000
                        },
                        responsive: true,
                        maintainAspectRatio:false,
                        legend: {
                            display:false
                        },
                        tooltip: {
                            backgroundColor:'rgba(33,33,33,1)',
                            cornerRadius:0,
                            footerFontFamily:"'Roboto'"
                        },
                        elements: {
                            arc: {
                                borderWidth: 0
                            }
                        }
                    }
                });
            });
        }

        $(function () {
            setTimeout(productMaterialPirChart, 3000);
        });

        // changeSalesPurchaseMonth
        function changeSalesPurchaseMonth(month) {
            $.get( "/dashboard/sale-purchase/month/" + month + "/chart/json", function( data ) {
                $('#total_sale').html(data.total_sale);
                $('#total_purchase').html(data.total_purchase);
                $('#sale_pending_amount').html(data.sale_pending_amount);
                $('#purchase_pending_amount').html(data.purchase_pending_amount);
                $('#sales_purchase_chart').html('');
                var lineChart = Morris.Line({
                    element: 'sales_purchase_chart',
                    data: data.dataProvider,
                    xkey: 'period',
                    ykeys: ['sale', 'purchase'],
                    labels: ['sale', 'purchase'],
                    pointSize: 2,
                    fillOpacity: 0,
                    lineWidth:2,
                    pointStrokeColors:['#127111', '#dc4666'],
                    behaveLikeLine: true,
                    gridLineColor: '#878787',
                    hideHover: 'auto',
                    lineColors: ['#127111', '#dc4666'],
                    resize: true,
                    redraw: true,
                    gridTextColor:'#878787',
                    gridTextFamily:"Roboto",
                    parseTime: false
                });
            });
        }
        $(function () {
            // changeSalesPurchaseMonth
            changeSalesPurchaseMonth({{date('m')}});
        });
    </script>
@endsection
