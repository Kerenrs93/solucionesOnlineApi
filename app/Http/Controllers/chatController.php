<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Events\chatEvent;

class chatController extends Controller
{
    public function sendMessge(Request $request){
        event(new chatEvent($request->message));
        return response()->json(['ok'=>true,'message'=>'Mensaje enviado correctamente']);
    }
}
