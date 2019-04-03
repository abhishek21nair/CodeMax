<?php

namespace App\Http\Controllers;

use App\Manufacture;
use Illuminate\Http\Request;

class Manufactures extends Controller
{
    //

        public function store(Request $request) {
       // return 'Manufacture record successfully created with id ';
       // print_r($request);

       // die();
       return Manufacture::addManufacture($request->json()->all());
        
    	}
}
