<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Manufacture extends Model
{
    //
    protected $fillable = array('id', 'name');


    protected function addManufacture($request){    	

    	DB::table('manufacture')->insert(['name' => $request['name']]);

        return response()->json("datasaved", 200);
    }

    protected function showManufacture(){

        $manufactures = DB::table('manufacture')->get();
        return response()->json($manufactures , 200);
    }
}
