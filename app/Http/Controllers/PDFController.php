<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
class pdfController extends Controller
{

  // REPORTS
  public function estimate()
  {
    $pdf = PDF::loadView('pdf.report-estimate')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('report-estimate');
  }

  public function inspection()
  {
    $pdf = PDF::loadView('pdf.report-inspection')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('report-inspection');
  }

  public function joborder()
  {
    $pdf = PDF::loadView('pdf.report-joborder')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('report-joborder');
  }

}