<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;
class ProductController extends Controller
{
    //
    public function index()
    {
    //     $products = DB::select('SELECT * FROM `products` ');
    //    // $products = products::paginate(3);
    //      return view('index', compact('products'));

        // $query = 'SELECT * FROM `products` ';
        //  $products = Paginate::make(DB::select($query), 10);
        //  return view('index', compact('products'));


      $products = DB::table('products')->paginate(9);
      $categorys = DB::select('SELECT * FROM `categories` ');
   // $categorys = DB::table('categories');
        return view('index', compact('products', 'categorys'));
}

    public function categoryList($id = null){

        $categoryfilter = products::where('id',$id)->first();
        return view('categorylist/show')->with(compact('categoryfilter'));
    
    }

        public function productInfo($id = null){


                $productfetails = products::where('id',$id)->first();
                return view('product.show', )->with(compact('productfetails'));
        }
 
            


}