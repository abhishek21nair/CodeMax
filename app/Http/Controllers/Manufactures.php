<?php

namespace App\Http\Controllers;

use App\Manufacture;
use Illuminate\Http\Request;

class Manufactures extends Controller
{
    //

      public function store(Request $request) {

       return Manufacture::addManufacture($request->json()->all());
        
    	}

    	public function index() {
 
       return Manufacture::showManufacture();
        
    	}
}
