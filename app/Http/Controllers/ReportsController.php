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
      ->where('e.isActive', 1)
      ->select('e.*', 'a.PlateNo', 'c.LastName','c.FirstName', DB::raw('DATE(e.created_at) AS EDate'))
      ->get();

    return view('reports.estimate_report', compact('estimates'));
  }

  public function inspection()
  {
    $inspections = DB::table('inspection_header as i')
      ->join('job_order as jo', 'i.JobOrderID', '=', 'jo.JobOrderID')
      ->join('estimate as e', 'i.EstimateID', '=', 'e.EstimateID')
      ->join('automobile as a', 'jo.AutomobileID', '=', 'a.AutomobileID')
      ->join('customer as c', 'a.CustomerID', '=', 'c.CustomerID')
      ->where('i.isActive', 1)
      ->select('i.*', 'a.PlateNo', 'c.LastName', 'c.MiddleName', 'c.FirstName', DB::raw('DATE(i.created_at) AS IDate'))
      ->get();

    return view('reports.inspection_report', compact('inspections'));
  }

  public function joborder()
  {
    $jos = DB::table('job_order as jo')
      ->join('automobile as a', 'jo.AutomobileID', '=', 'a.AutomobileID')
      ->join('customer as c', 'a.CustomerID', '=', 'c.CustomerID')
      ->where('jo.isActive', 1)
      ->select('jo.JobOrderID', 'jo.TotalAmountDue', 'a.PlateNo', 'c.LastName', 'c.FirstName', DB::raw('DATE(jo.created_at) AS JODate'))
      ->get();

    return view('reports.joborder_report', compact('jos'));
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
      ->select('jo.JobOrderID', 'sp.JobOrderID', 'sp.ServiceID', DB::raw('SUM(sp.LaborCost) as ServiceTotalPrice'))
      ->get();

    $productused = DB::table('product_used as pu')
      ->join('job_order as jo', 'pu.JobOrderID', '=', 'jo.JobOrderID')
      ->where(['pu.isActive'=>1, 'pu.isCustomerProvided'=>0])
      ->groupby('pu.JobOrderID')
      ->select('jo.JobOrderID', 'pu.JobOrderID', 'pu.ProductID', DB::raw('SUM(pu.SubTotal) as ProductTotalPrice'))
      ->get();

    $total = DB::table('job_order')
      ->where('isActive', 1)
      ->select(DB::raw('SUM(TotalAmountDue) as totals'))
      ->get();
      
    return view('reports.jobordersales_report', compact('joborders', 'serviceperformed', 'productused', 'total'));
  }

  public function payment()
  {

    $pdf = PDF::loadView('reports.payment_report')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('payment_report');
  }

}