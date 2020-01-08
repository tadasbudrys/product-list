<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
class productInfoController extends Controller
{
    //
    public function show( $id ) {


       // $product = Product::with('productInfo')->findOrFail($id);
      //  $product = Product::where('id',$id)->first();
         $product = Product::find( $id );
         $prductvariant = collect(DB::select('SELECT * FROM products '))->where('id',$id);
       //  $productname = products::where('id',$id)->first();
		return view( 'product/show' , compact( 'product','prductvariant'   ));
   }
   

   public function variants($id){

      $prductvariant = collect(DB::select('SELECT * FROM `produts`  '))->where('id',$id);
      return view('product/show', compact(  'prductvariant'));
   }
}
