<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class serviceController extends Controller
{
    //
    function ServiceIndex()
    {
        
        
        return view('services');
    }
    function getServiceData(){
        $result=json_encode(ServicesModel::all()) ;
        return $result;
    }
}
