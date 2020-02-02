<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;


class ProductController extends Controller
{
	public function showAll(){
		$dataProductDariModel = Product::all();
		return view('product.display', ["products" => $dataProductDariModel]);
    //kode logika untuk mengambil dan menampilkan semua data
	}

	public function saveNew (Request $request){
	//kode logika untuk mentimpan product baru
	}
}

