<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;

class InspectionChecklistController extends Controller
{

    /**
     * This serves as the index hehe
     */
    public function index()
    {
      // $type = DB::table('inspection_type')
      //     ->where('isActive', 1)
      //     ->get();
      //
      // $item = DB::table('inspection_checklist as ic')
      //   ->leftJoin('inspection_type as it', 'ic.InspectionTypeID', '=', 'it.InspectionTypeID')
      //   ->select('ic.InspectionTypeID','ic.InspectionChecklistID', 'ic.InspectionItem')
      //   ->where('ic.isActive', 1)
      //   ->where('it.isActive',1)
      //   ->get();
      //
      //   return view('service.inspectionchecklist')->with("type",$type)->with("item",$item);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {

    }

    // public function delete($id)
    // {
    //     try{
    //         InspectionChecklist::findOrFail($id);
    //         InspectionChecklist::destroy($id);
    //     }
    //     catch(\Illuminate\Database\QueryException $e){
    //         $err = $e->getMessage();
    //             return redirect('inspectionchecklist')
    //                 ->withErrors($err);
    //     }
    //     return redirect('inspectionchecklist');
    // }

    public function add(){

      $name = Input::get('Iname');
      $item = Input::get('Item');

      //Add inspectionType
      $itype = array("InspectionType"=>$name);
      DB::table('inspection_checklist_type')->insert($itype);

      $temp = DB::table('inspection_checklist_type')->max('InspectionTypeID');

      //Add Inspectionitem
      for($i=0;$i<=count($item);$i++)
      {
        $inspection = array("Inspectionitem"=>$item[$i],"InspectionTypeID"=>$temp);
        DB::table('inspection_checklist')->insert($inspection);

      }



    }


    public function Retrieve(){
      //Get Inspection Name
      $type = DB::table('inspection_checklist_type')
      ->WHERE('InspectionTypeID',Input::get('Cid'))
      ->get();

      //Get Inspection Item
      $item = DB::table('inspection_checklist')
      ->WHERE('InspectionTypeID',Input::get('Cid'))
      ->get();

        return \Response::json(['type'=>$type,'item'=>$item]);

    }

    public function editchecklist(){
      //edit inspection checklist type
      DB::table('inspection_checklist_type')
      ->WHERE('InspectionTypeID',Input::get('Inid'))
      ->UPDATE(['InspectionType'=>Input::get('type')]);

      //edit inspection Items
      $items = Input::get('item');
      $id = Input::get('id');

      for($i=0;$i<=count($items);$i++){

        DB::table('inspection_checklist')
        ->WHERE('InspectionChecklistID',$id[$i])
        ->UPDATE(['InspectionItem'=>$items[$i]]);


      }
      }

      public function delete(){

        DB::table('inspection_checklist_type')
        ->WHERE('InspectionTypeID',Input::get('clid'))
        ->UPDATE(['isActive'=>0]);

        DB::table('inspection_checklist')
        ->WHERE('InspectionTypeID',Input::get('clid'))
        ->UPDATE(['isActive'=>0]);


      }

}
