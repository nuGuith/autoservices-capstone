<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\AutomobileMake;
use App\AutomobileModel;
use Validator;
use Session;
use Redirect;

class AddVehicleTypeController extends Controller
{	
    public function index(){
    	return view('vehicletype.addvehicletype');
    }

    public function store(Request $request){
    	$lastMakeId = 0;
    	$niceNames = [
            'make' => 'Make Name',
            'model' => 'Model Name'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'make' => ['bail', 'required', 'unique:automobile_make', 'max:50', 'regex:/$^[^~`!@#*_={}|\;<>,.?]+/'],
            'model' => ['bail', 'required', 'unique:automobile_model', 'max:50', 'regex:/$^[^~`!@#*_={}|\;<>,.?]+/']
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('addvehicletype')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
            DB::beginTransaction();
            AutomobileMake::create([
                'make' => trim($request->make)
            ]);
            $lastMakeId = DB::select('SELECT id FROM automobile_make ORDER BY makeid DESC LIMIT 1');
            AutomobileModel::create([
            	'makeid' => $lastMakeId,
            	'model' => trim($request->model)
            ]);
            DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('addvehicletype')
                        ->withErrors($err, 'add');
            }
            $request->session()->flash('success', 'Record successfully added');
            return redirect('addvehicletype');
        }
    }
 
}