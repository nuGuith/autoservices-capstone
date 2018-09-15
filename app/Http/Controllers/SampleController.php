<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Estimate;
use App\Automobile;
use App\Personnel;
use App\ServiceBay;
use PDF;
class SampleController extends Controller
{

  public function inspect()
  {
      return view('sample_pdf.indexx');
  }
  public function inspect_pdf()
  {
    // Fetch all customers from database
    $bay = ServiceBay::get();
    // Send data to the view using loadView function of PDF facade
    //return view('sample_pdf.indexx', ['bay' => $bay]);

    $pdf = PDF::loadView('sample_pdf.inspectform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('inspectform');
  }

  public function estimate_pdf()
  {
    // $estimate = Estimate::findOrFail($id);
    // $servicebay = ServiceBay::findOrFail($estimate->ServiceBayID);
    // $automobile = Automobile::where(['AutomobileID' => $estimate->AutomobileID, 'isActive' => 1])->first();
    // $model = AutomobileModel::where(['ModelID' => $automobile->ModelID, 'isActive' => 1]);
    // $customer = Customer::where(['CustomerID' => $automobile->CustomerID, 'isActive' => 1])
    //   ->select(DB::table('customer')
    //   ->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'EmailAddress', 'ContactNo', 'CompleteAddress', 'PWD_SC_No')
    //   ->first();

    $pdf = PDF::loadView('sample_pdf.estimateform')
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
    //return view('sample_pdf.indexx', ['bay' => $bay]);

    $pdf = PDF::loadView('sample_pdf.receipt')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('receipt');
  }

  public function joborder_pdf()
  {
    // Fetch all customers from database
    $bay = ServiceBay::get();
    // Send data to the view using loadView function of PDF facade
    //return view('sample_pdf.indexx', ['bay' => $bay]);

    $pdf = PDF::loadView('sample_pdf.joborderform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('joborderform');
  }

}