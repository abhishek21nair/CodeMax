<?php

namespace App\Http\Controllers;

use App\CarModelsModel;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    //
    public function store(Request $request) {
       
       return CarModelsModel::addModel($request->json()->all());
        
    	}

    public function index() {
       
       return CarModelsModel::showModel();
        
    	}
}
