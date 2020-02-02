<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function pintuMasuk(Request $request){
    	return "selmat datang di pintu masuk bambang (dari controller)";
    }
}
