<?php

namespace App\Http\Controllers;

use DatePeriod;
use App\Product;
use App\Category;
use App\Employee;
use App\Customer;
use App\Supplier;
use DateInterval;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        \View::share('page_name', 'Dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->ajax()){
            return redirect('home');
        }
        return view('layout.form');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        // $products = Product::get();
        // $categories = Category::get();
        // $customers = Customer::get();
        // $suppliers = Supplier::get();

        return view('dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leadMonth($month)
    {
        $start_date = Carbon::createFromFormat('m', $month)->startOfMonth();
        $end_date = Carbon::createFromFormat('m', $month)->endOfMonth();
        $interval = DateInterval::createFromDateString('1 day');

        $period = new DatePeriod($start_date, $interval, $end_date);

        $leadChart = collect();

        $total = 0;

        foreach ($period as $key => $dt) {
            $leads = Lead::whereDate('created_at', $dt->format("Y-m-d"))->count();

            $dataProvider[$key] = [
                'period' => $dt->format("d"),
                'lead' => $leads,
            ];

            $total = $total + $leads;
        }

        $leadChart->put('dataProvider', $dataProvider);
        $leadChart->put('total', $total);

        // cur_month_percentage
        $cur_month_leads = Lead::whereMonth('created_at', $month)->count();
        $prev_month_leads = Lead::whereMonth('created_at', $month - 1)->count();

        if(!$cur_month_leads) {
            $cur_month_percentage = 0;
        } else if (!$prev_month_leads) {
            $cur_month_percentage = 100;
        } else {
            $cur_month_percentage = round(($prev_month_leads / $cur_month_leads) * 100);
        }

        $leadChart->put('cur_month_percentage', ($prev_month_leads > $cur_month_leads && $cur_month_percentage ? '-' : '') . $cur_month_percentage);

        // cur_month_closed_leads
        $cur_month_closed_leads = Lead::whereMonth('created_at', $month)->where('status', 1)->count();

        $leadChart->put('cur_month_closed_leads', $cur_month_closed_leads);

        $prev_month_closed_leads = Lead::whereMonth('created_at', $month - 1)->where('status', 1)->count();

        if(!$cur_month_closed_leads) {
            $cur_month_closed_leads_percentage = 0;
        } else if (!$prev_month_closed_leads) {
            $cur_month_closed_leads_percentage = 100;
        } else {
            $cur_month_closed_leads_percentage = round(($prev_month_closed_leads / $cur_month_closed_leads) * 100);
        }

        $leadChart->put('cur_month_closed_leads_percentage', ($prev_month_closed_leads > $cur_month_closed_leads && $cur_month_closed_leads_percentage ? '-' : '') . $cur_month_closed_leads_percentage);

        // cur_month_open_leads
        $cur_month_open_leads = Lead::whereMonth('created_at', $month)->where('status', 0)->count();

        $leadChart->put('cur_month_open_leads', $cur_month_open_leads);

        $prev_month_open_leads = Lead::whereMonth('created_at', $month - 1)->where('status', 0)->count();

        if(!$cur_month_open_leads) {
            $cur_month_open_leads_percentage = 0;
        } else if (!$prev_month_open_leads) {
            $cur_month_open_leads_percentage = 100;
        } else {
            $cur_month_open_leads_percentage = round(($prev_month_open_leads / $cur_month_open_leads) * 100);
        }

        $leadChart->put('cur_month_open_leads_percentage', ($prev_month_open_leads > $cur_month_open_leads && $cur_month_open_leads_percentage ? '-' : '') . $cur_month_open_leads_percentage);

        return $leadChart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leadConverted()
    {
        $leadChart = collect();

        $leads = Lead::count();
        $closed_leads = Lead::where('status', 1)->count();

        if(!$leads || !$closed_leads) $conversion_percentage = 0;
        else $conversion_percentage = round(($closed_leads / $leads) * 100);

        $leadChart->put('total_leads', $leads);
        $leadChart->put('closed_leads', $closed_leads);
        $leadChart->put('conversion_percentage', $conversion_percentage);

        return $leadChart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search($keyword){
        $data['page_name'] = 'Manage Search';

        $data['customers'] = Customer::where('name', 'like', $keyword . '%')->get();

        $data['employees'] = Employee::where('first_name', 'like', $keyword . '%')
                                        ->orWhere('middle_name', 'like', $keyword . '%')
                                        ->orWhere('last_name', 'like', $keyword . '%')
                                        ->get();

        $data['drivers'] = Driver::where('name', 'like', $keyword . '%')->get();

        $data['products'] = Product::where('name', 'like', $keyword . '%')->get();

        $data['vehicles'] = Vehicle::where('reg_no', 'like', $keyword . '%')->get();

        return view('pages.search',$data)->render();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productStockChartJson()
    {
        $productChart = collect();

        $name = [];
        $stock = [];
        foreach (Product::get() as $key => $product) {
            $name[$key] = $product->name;
            $stock[$key] = $product->stock;
        }

        $productChart->put('name', $name);
        $productChart->put('stock', $stock);

        return $productChart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rawMaterialStockChartJson()
    {
        $rawMaterialChart = collect();

        $name = [];
        $stock = [];
        foreach (RawMaterial::get() as $key => $raw_material) {
            $name[$key] = $raw_material->name;
            $stock[$key] = $raw_material->stock;
        }

        $rawMaterialChart->put('name', $name);
        $rawMaterialChart->put('stock', $stock);

        return $rawMaterialChart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function salePurchaseChartJson($month)
    {
        $start_date = Carbon::createFromFormat('m', $month)->startOfMonth();
        $end_date = Carbon::createFromFormat('m', $month)->endOfMonth();
        $interval = DateInterval::createFromDateString('1 day');

        $period = new DatePeriod($start_date, $interval, $end_date);

        $salePurchaseChart = collect();

        $total = 0;

        $total_sale = 0;
        $total_purchase = 0;
        foreach ($period as $key => $dt) {
            $sale = SalesPayment::whereDate('created_at', $dt->format("Y-m-d"))
                                    ->whereNotIn('type', ['credit'])
                                    ->sum('amount');
            $purchase = PurchasePayment::whereDate('created_at', $dt->format("Y-m-d"))
                                            ->whereNotIn('type', ['credit'])
                                            ->sum('amount');

            $dataProvider[$key] = [
                'period' => $dt->format("d"),
                'sale' => $sale,
                'purchase' => $purchase,
            ];

            $total_sale = $total_sale + $sale;
            $total_purchase = $total_purchase + $purchase;
        }

        $sale_pendings = SalesInvoice::whereMonth('created_at', $month)
                                        ->whereYear('created_at', date('Y'))
                                        ->get();
        $sale_pending_amount = 0;
        foreach ($sale_pendings as $key => $sale_pending) {
            $sale_pending_amount = $sale_pending_amount + $sale_pending->balance_amount;
        }

        $purchase_pendings = PurchaseInvoice::whereMonth('created_at', $month)
                                        ->whereYear('created_at', date('Y'))
                                        ->get();
        $purchase_pending_amount = 0;
        foreach ($purchase_pendings as $key => $purchase_pending) {
            $purchase_pending_amount = $purchase_pending_amount + $purchase_pending->balance_amount;
        }

        $salePurchaseChart->put('dataProvider', $dataProvider);
        $salePurchaseChart->put('total_sale', $total_sale);
        $salePurchaseChart->put('total_purchase', $total_purchase);
        $salePurchaseChart->put('sale_pending_amount', $sale_pending_amount);
        $salePurchaseChart->put('purchase_pending_amount', $purchase_pending_amount);

        return $salePurchaseChart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function leadMonthComparisonChartJson()
    {
        $leadComparisonChart = collect();

        $label = [];
        $comparison = [];
        $comparison_lead_data = [];
        $comparison_closed_lead_data = [];

        for ($month = 1; $month <= 12; $month++) { 
            $label[$month-1] = Carbon::createFromFormat('m', $month)->format('M');

            $start_date = Carbon::createFromFormat('m', $month)->startOfMonth();
            $end_date = Carbon::createFromFormat('m', $month)->endOfMonth();
            $interval = DateInterval::createFromDateString('1 day');

            $period = new DatePeriod($start_date, $interval, $end_date);

            $lead = Lead::whereMonth('created_at', $month)
                            ->whereYear('created_at', date('Y'))
                            ->count();
            $comparison_lead_data[$month-1] = $lead;

            $lead = Customer::whereMonth('created_at', $month)
                                ->whereYear('created_at', date('Y'))
                                ->whereNotNull('lead_id')
                                ->count();
            $comparison_closed_lead_data[$month-1] = $lead;
        }

        $comparison[0] = [
            'label' => 'Created Lead',
            'backgroundColor' => "rgba(230,154,42,1)",
            'borderColor' => "rgba(230,154,42,1)",
            'data' => $comparison_lead_data
        ];

        $comparison[1] = [
            'label' => 'Closed Lead',
            'backgroundColor' => "rgba(234,108,65,1)",
            'borderColor' => "rgba(234,108,65,1)",
            'data' => $comparison_closed_lead_data
        ];

        $leadComparisonChart->put('label', $label);
        $leadComparisonChart->put('comparison', $comparison);

        return $leadComparisonChart;
    }
}
