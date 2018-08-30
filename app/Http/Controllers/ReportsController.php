<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Estimate;
use App\Automobile;
use App\Personnel;
use App\ServiceBay;
use PDF;
class ReportsController extends Controller
{

  public function estimate()
  {
    // Fetch all customers from database
    $bay = ServiceBay::get();
    // Send data to the view using loadView function of PDF facade
    //return view('sample_pdf.indexx', ['bay' => $bay]);

    $pdf = PDF::loadView('reports.estimate_report')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('estimate_report');
  }

  public function inspection()
  {

    $pdf = PDF::loadView('reports.inspection_report')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('inspection_report');
  }

  public function joborder()
  {

    $pdf = PDF::loadView('reports.joborder_report')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('joborder_report');
  }

  public function jobordersales()
  {

    $pdf = PDF::loadView('reports.jobordersales_report')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('jobordersales_report');
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