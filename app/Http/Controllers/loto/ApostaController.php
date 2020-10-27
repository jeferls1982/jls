<?php

namespace jlsonline\Http\Controllers\loto;

use Illuminate\Http\Request;
use jlsonline\Http\Controllers\Controller;

class ApostaController extends Controller
{
    public function save_aposta(Request $request){
        return response()->json($request);
    }
}
