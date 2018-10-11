<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Estimate;
use App\Automobile;
use App\Customer;
use App\InspectionHeader;
use App\JobOrder;
use App\Service;
use App\Product;
use App\ServicePerformed;
use App\ProductUsed;
use PDF;
class ReportsController extends Controller
{

  public function estimate()
  {
    $estimates = DB::table('estimate as e')
      ->join('automobile as a', 'e.AutomobileID', '=', 'a.AutomobileID')
      ->join('customer as c', 'a.CustomerID', '=', 'c.CustomerID')
      ->where('e.isActive',1)
      ->select('e.*', 'a.PlateNo', 'c.LastName','c.FirstName', DB::raw('DATE(e.created_at) AS EDate'))
      ->get();

    $joborder = DB::table('job_order as jo')
      ->join('estimate as e', 'e.EstimateID', '=', 'jo.EstimateID')
      ->where('jo.isActive', 1)
      ->select('JobOrderID', 'jo.EstimateID')
      ->get();

    return view('reports.estimate_report', compact('estimates', 'joborder'));
  }

  public function inspection()
  {
    $inspections = DB::table('inspection_header as i')
      ->join('job_order as jo', 'i.JobOrderID', '=', 'jo.JobOrderID')
      ->join('automobile as a', 'jo.AutomobileID', '=', 'a.AutomobileID')
      ->join('customer as c', 'a.CustomerID', '=', 'c.CustomerID')
      ->where('i.isActive', 1)
      ->select('i.*', 'a.PlateNo', 'c.LastName', 'c.MiddleName', 'c.FirstName', DB::raw('DATE(i.created_at) AS IDate'))
      ->get();

      $inspects = DB::table('inspection_header as i')
      ->join('estimate as e', 'i.EstimateID', '=', 'e.EstimateID')
      ->join('automobile as a', 'e.AutomobileID', '=', 'a.AutomobileID')
      ->join('customer as c', 'a.CustomerID', '=', 'c.CustomerID')
      ->where('i.isActive', 1)
      ->select('i.*', 'a.PlateNo', 'c.LastName', 'c.MiddleName', 'c.FirstName', DB::raw('DATE(i.created_at) AS IDate'))
      ->get();

    return view('reports.inspection_report', compact('inspections', 'inspects'));
  }

  public function joborder(Request $request)
  {
    $startdate = $request->startdate;
    $enddate = $request->enddate;

    $jos = DB::table('job_order as jo')
      ->join('automobile as a', 'jo.AutomobileID', '=', 'a.AutomobileID')
      ->join('customer as c', 'a.CustomerID', '=', 'c.CustomerID')
      ->where(['jo.isActive' => 1, 'jo.Status'=>'Finalized'])
      ->whereBetween('jo.created_at', [$startdate, $enddate])
      ->select('jo.JobOrderID', 'jo.TotalAmountDue', 'a.PlateNo', 'c.LastName', 'c.FirstName', DB::raw('DATE(jo.created_at) AS JODate'))
      ->get();

    return view('reports.joborder_report', compact('jos', 'startdate', 'enddate'));
  }

  public function jobordersales()
  {
    $joborders = DB::table('job_order as jo')
      ->where('jo.isActive', 1)
      ->select('jo.JobOrderID', 'jo.TotalAmountDue', DB::raw('DATE(jo.Agreement_Timestamp) as JODate'))
      ->get();

    $serviceperformed = DB::table('service_performed as sp')
      ->join('job_order as jo', 'sp.JobOrderID', '=', 'jo.JobOrderID')
      ->where(['sp.isActive'=>1, 'sp.isPerformed'=>1])
      ->groupby('sp.JobOrderID')
      ->select('jo.JobOrderID', 'sp.JobOrderID', 'sp.ServiceID', DB::raw('SUM(LaborCost) as ServiceTotalPrice'))
      ->get();

    $productused = DB::table('product_used as pu')
      ->join('job_order as jo', 'pu.JobOrderID', '=', 'jo.JobOrderID')
      ->where(['pu.isActive'=>1, 'pu.isCustomerProvided'=>0])
      ->groupby('pu.JobOrderID')
      ->select('jo.JobOrderID', 'pu.JobOrderID', 'pu.ProductID', DB::raw('SUM(SubTotal) as ProductTotalPrice'))
      ->get();

    $servicetotal = DB::table('service_performed as sp')
      ->join('job_order as jo', 'sp.JobOrderID', '=', 'jo.JobOrderID')
      ->where(['sp.isActive'=>1, 'isPerformed'=>1])
      ->select(DB::raw('SUM(LaborCost) as ServiceTotalPrice'))
      ->get();
    
    $producttotal = DB::table('product_used as pu')
      ->join('job_order as jo', 'pu.JobOrderID', '=', 'jo.JobOrderID')
      ->where(['pu.isActive'=>1, 'isCustomerProvided'=>0])
      ->select(DB::raw('SUM(pu.SubTotal) as ProductTotalPrice'))
      ->get();

    $totals = DB::table('job_order')
      ->where('isActive', 1)
      ->select(DB::raw('SUM(TotalAmountDue) as gross'))
      ->get();
      
    return view('reports.jobordersales_report', compact('joborders', 'serviceperformed', 'productused', 'servicetotal', 'producttotal', 'totals'));
  }

  public function backjob()
  {
    
    return view('reports.backjob_report');
  }

  public function sales()
  {
    $sales = DB::table('job_order')
      ->where('isActive', 1)
      ->select('JobOrderID', 'DiscountedAmount', 'TotalAmountDue', DB::raw('DATE(Agreement_Timestamp) as JODate, TotalAmountDue-DiscountedAmount as disc'))
      ->get();

    $totalsales = DB::table('job_order')
      ->where('isActive', 1)
      ->select(DB::raw('SUM(TotalAmountDue) as sales'))
      ->get();

    return view('reports.sales_report', compact('sales', 'totalsales'));
  }

}