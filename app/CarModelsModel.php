<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CarModelsModel extends Model
{
    //
    protected $fillable = array('id', 'nameofmodel','manufactureid','imagebase64string','nameofimage','sizeofimage','typeofimage');

    protected function addModel($request){   
    	

    $imagestr = json_encode($request['imageBase64String']);

    	DB::table('carmodel')->insert([
    		'nameofmodel' => $request['nameOfModel'],
    		'manufactureid' => $request['manufactureId'],
    		'imagebase64string' => $imagestr,
    		'nameofimage' => $request['nameOfImage'],
    		'sizeofimage' => $request['sizeOfImage'],
    		'typeofimage' => $request['typeOfImage']
    	]);   	

        return response()->json("datasaved", 200);

    }

    protected function showModel(){        

        $manufactures = DB::table('carmodel')
            ->join('manufacture', 'manufactureid', '=', 'manufacture.id')            
            ->select('carmodel.id AS id', 'carmodel.nameOfModel AS model_name','manufacture.name AS manufacturer_name', 'carmodel.id AS count')
            ->get();

        return response()->json($manufactures , 200);
    }
}
