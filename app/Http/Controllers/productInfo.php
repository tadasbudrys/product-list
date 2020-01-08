<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;

class productInfo extends Controller
{
    //

    public function show( $id ) {


        $product = Product::with('productInfo')->findOrFail($id);
      //  $product = Product::where('id',$id)->first();
		// $product = Product::find( $id );
		return view( 'product/show' )
			->with( 'product', $product );
	}

}
