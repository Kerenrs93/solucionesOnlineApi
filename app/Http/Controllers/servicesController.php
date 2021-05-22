<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
class servicesController extends Controller
{
    public function getPosts(){
        // $service=Services::where('idUser',$idUser)->get();
        // return response()->json(['service'=>$service],200);
        $service=Services::all();
        return response()->json(['service'=>$service],200);
    }
}
