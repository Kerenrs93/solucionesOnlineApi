<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class registerUserController extends Controller
{

    public function getUser(Request $request){

        $user=User::where('nameUser',$request->nameUser)
                ->where('passwordUser',$request->passwordUser)
                ->get();
        //$validaUser=sizeof($user) ? true : false;
        return response()->json(['user'=>$user],200);
    }
    public function register(Request $request){
        $data=$request->all();
        User::create($data);
        return response()->json(['res'=>$data,'message'=>'Registro creado con exito'],200);
    }
}
