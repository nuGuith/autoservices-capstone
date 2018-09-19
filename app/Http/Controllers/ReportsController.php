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
    return view('reports.estimate_report');
  }

  public function inspection()
  {
    return view('reports.inspection_report');
  }

  public function joborder()
  {
    return view('reports.joborder_report');
  }

  public function jobordersales()
  {
    return view('reports.jobordersales_report');
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