<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manufacture extends Model
{
    //
    protected $fillable = array('id', 'name');


    protected function addManufacture($request){
    	//print_r($request);die();

    	DB::table('manufacture')->insert(['name' => $request['name']]);

    	// $manufacture = new Manufacture;

     //    $manufacture->name = $request['name'];
        
     //    $manufacture->save();

        return response()->json("datasaved", 200);
    }

    protected function showManufacture(){
        $manufactures = DB::table('manufacture')->get();
        return response()->json($manufactures , 200);
    }
}
