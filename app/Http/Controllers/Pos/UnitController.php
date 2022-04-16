<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Unit;
use Auth;
use Illuminate\Support\Carbon;

class UnitController extends Controller
{
     public function UnitAll(){
        
        $units = Unit::latest()->get();
        return view('backend.unit.unit_all',compact('units'));
    } // End Method 


    public function UnitAdd(){
        return view('backend.unit.unit_add');
    } // End Method 



     public function UnitStore(Request $request){

        Unit::insert([
            'name' => $request->name, 
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(), 

        ]);

         $notification = array(
            'message' => 'Unit Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('unit.all')->with($notification);

    } // End Method 





}
 