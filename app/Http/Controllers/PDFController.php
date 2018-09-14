<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Estimate;
use App\Automobile;
use App\Personnel;
use App\ServiceBay;
use PDF;
class pdfController extends Controller
{
  public function inspect()
  {

    $pdf = PDF::loadView('sample_pdf.inspectform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('inspectform');
  }

  public function estimate()
  {

    $pdf = PDF::loadView('sample_pdf.estimateform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('estimateform');
  }

  public function joborder()
  {

    $pdf = PDF::loadView('sample_pdf.joborderform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('joborderform');
  }

  public function backjob()
  {

    $pdf = PDF::loadView('sample_pdf.backjobform')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('backjobform');
  }

  public function warranty()
  {

    $pdf = PDF::loadView('sample_pdf.warranty')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('warranty');
  }

  public function receipt()
  {

    $pdf = PDF::loadView('sample_pdf.receipt')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('receipt');
  }

  public function invoice()
  {

    $pdf = PDF::loadView('sample_pdf.invoice')
    ->setPaper([0, 0, 612, 936], 'portrait');
    // If you want to store the generated pdf to the server then you can use the store function
    $pdf->save(storage_path().'_filename.pdf');
    // Finally, you can download the file using download function
    return $pdf->stream('invoice');
  }

}