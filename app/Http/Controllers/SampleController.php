<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Customer;
use App\Estimate;
use App\JobOrder;
use App\Automobile;
use App\AutomobileMake;
use App\AutomobileModel;
use App\ServiceBay;
use App\Complaint;
use App\Personnel;
use App\Discount;
use App\Service;
use App\Product;
use PDF;
class SampleController extends Controller
{

  public function inspect()
  {
      return view('pdf.indexx');
  }
  public function inspect_pdf()
  {
    // Fetch all customers from database
    $bay = ServiceBay::get();
    // Send data to the view using loadView function of PDF facade
    //return view('pdf.indexx', ['bay' => $bay]);

    $pdf = PDF::loadView('pdf.inspectform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('inspectform');
  }

  public function estimate_pdf($id)
  {
    $estimate = Estimate::findOrFail($id);

    $model = Automobile::findOrFail($estimate->AutomobileID);
        
    $automobile = DB::table('automobile_model AS md')
      ->where('md.ModelID', $model->ModelID)
      ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
      ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
      ->select('mk.Make', 'md.Model', 'auto.CustomerID', 'auto.Transmission', 'auto.PlateNo', 'md.Year', 'auto.Mileage', 'auto.ChassisNo', 'auto.Color')
      ->first();

    $customer = DB::table('customer')
      ->where('customerid', $model->CustomerID)
      ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
      ->first();
    $servicebay = ServiceBay::findOrFail($estimate->ServiceBayID);

    $personnel = DB::table('personnel_header')
      ->where('personnelid',$estimate->PersonnelID)
      ->select(DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"))
      ->first();

    $serviceperformed = DB::table('service_performed AS sp')
      ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
      ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
      ->select('sp.*', 'svc.*')
      ->get();

    $productused = DB::table('product_used AS pu')
      ->join('product as pr', 'pu.productid', '=', 'pr.productid')
      ->where(['estimateid' => $id, 'pu.isActive' => 1])
      ->select('pu.*', 'pr.*')
      ->get();

    $laborcost = DB::table('service_performed AS sp')
      ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
      ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
      ->select(DB::raw('SUM(sp.LaborCost) as Labor'))
      ->first();
    
    $product = DB::table('product_used AS pu')
      ->join('product as pr', 'pu.productid', '=', 'pr.productid')
      ->where(['estimateid' => $id, 'pu.isActive' => 1])
      ->select(DB::raw('SUM(pu.SubTotal) as ProductCost'))
      ->first();

    $complaint = DB::table('complaint as c')
      ->where(['estimateid' => $id, 'c.isActive'=> 1])
      ->select('c.Diagnosis', 'c.Problem')
      ->first();
    
    $time = DB::table('service_performed AS sp')
      ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
      ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
      ->select(DB::raw('SUM(svc.EstimatedTime) as est'))
      ->first();
    
    $timeParse = floatval($time->est);
    $hours = ($timeParse/60);
    if ($hours > 1) {
      $hours = $hours." "."hrs.";
    }
    else {
      $hours = $hours."hr.";
    }

    $pdf = PDF::loadView('pdf.estimateform', compact('estimate', 'laborcost', 'servicebay', 'customer', 'automobile', 'model', 'personnel', 'serviceperformed', 'product', 'productused', 'complaint', 'time', 'hours'))
    ->setPaper([0, 0, 612, 936], 'portrait');

    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('estimateform');
  }

  public function receipt_pdf()
  {
    // Fetch all customers from database
    $bay = ServiceBay::get();
    // Send data to the view using loadView function of PDF facade
    //return view('pdf.indexx', ['bay' => $bay]);

    $pdf = PDF::loadView('pdf.receipt')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('receipt');
  }

  public function joborder_pdf($id)
  {
    $joborder = JobOrder::findOrFail($id);
    $model = Automobile::findOrFail($joborder->AutomobileID);
    
    $automobile = DB::table('automobile_model AS md')
        ->where('md.ModelID', $model->ModelID)
        ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
        ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
        ->select('mk.Make', 'md.Model', 'auto.CustomerID', 'auto.Transmission', 'auto.PlateNo', 'auto.Mileage', 'auto.ChassisNo', 'md.Year', 'auto.Color')
        ->first();

    $customer = DB::table('customer')
        ->where('customerid', $model->CustomerID)
        ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
        ->first();

    $servicebay = ServiceBay::findOrFail($joborder->ServiceBayID);

    $personnel = DB::table('personnel_header')
      ->where('personnelid',$joborder->PersonnelID)
      ->select(DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"))
      ->first();

    $serviceperformed = DB::table('service_performed AS sp')
      ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
      ->where(['sp.joborderid' => $id, 'sp.isActive' => 1])
      ->select('sp.*', 'svc.*')
      ->get();

    $productused = DB::table('product_used AS pu')
      ->join('product as pr', 'pu.productid', '=', 'pr.productid')
      ->where(['joborderid' => $id, 'pu.isActive' => 1])
      ->select('pu.*', 'pr.*')
      ->get();
    
    $laborcost = DB::table('service_performed AS sp')
      ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
      ->where(['sp.joborderid' => $id, 'sp.isActive' => 1])
      ->select(DB::raw('SUM(sp.LaborCost) as Labor'))
      ->first();
    
    $product = DB::table('product_used AS pu')
      ->join('product as pr', 'pu.productid', '=', 'pr.productid')
      ->where(['joborderid' => $id, 'pu.isActive' => 1])
      ->select(DB::raw('SUM(pu.SubTotal) as ProductCost'))
      ->first();
      
    $pdf = PDF::loadView('pdf.joborderform', compact('joborder', 'model', 'automobile', 'customer', 'servicebay', 'personnel', 'serviceperformed', 'productused', 'laborcost', 'product', 'release'))
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('joborderform');
  }

  public function warranty_pdf($id)
  {
    $joborder = JobOrder::findOrFail($id);
    $model = Automobile::findOrFail($joborder->AutomobileID);
    
    $automobile = DB::table('automobile_model AS md')
        ->where('md.ModelID', $model->ModelID)
        ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
        ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
        ->select('mk.Make', 'md.Model', 'auto.CustomerID', 'auto.Transmission', 'auto.PlateNo', 'auto.Mileage', 'auto.ChassisNo', 'md.Year', 'auto.Color')
        ->first();

    $customer = DB::table('customer')
        ->where('customerid', $model->CustomerID)
        ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
        ->first();
    
    $serviceperformed = DB::table('service_performed AS sp')
        ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
        ->where(['sp.joborderid' => $id, 'sp.isActive' => 1])
        ->select('sp.*', 'svc.*')
        ->get();
  
    $productused = DB::table('product_used AS pu')
        ->join('product as pr', 'pu.productid', '=', 'pr.productid')
        ->where(['joborderid' => $id, 'pu.isActive' => 1])
        ->select('pu.*', 'pr.*')
        ->get();

    $pdf = PDF::loadView('pdf.warrantyform', compact('joborder', 'model', 'automobile', 'customer', 'serviceperformed', 'productused'))
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('warrantyform');
  }

}