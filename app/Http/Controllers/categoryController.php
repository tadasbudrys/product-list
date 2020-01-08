<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;


class categoryController extends Controller
{
    public function show( $id ) {


          $category = Product::find( $id);
          //$categoryslists = DB::table('categories')->where('id',$id);
         // $categoryslists = DB::table('categories')->where('id',$id);
          $categorys = collect(DB::select('SELECT * FROM `categories` '))->where('id',$id);
          $categoryProducts= collect(DB::select('SELECT multiplecategories.categories_id, multiplecategories.product_id, products.title
          FROM multiplecategories
          INNER JOIN products ON multiplecategories.product_id = products.id
          INNER JOIN categories On multiplecategories.categories_id = categories.id
          WHERE multiplecategories.categories_id '  ))->where('categories_id',$id);

           
          //->where('multiplecategories.categories_id',$id);

          // $categoryProducts = collect( DB::select(DB::raw('SELECT multiplecategories.categories_id, multiplecategories.product_id, products.title
          // FROM multiplecategories
          // INNER JOIN products ON multiplecategories.product_id = products.id
          // INNER JOIN categories On multiplecategories.categories_id = categories.id
          
          // WHERE multiplecategories.categories_id = :arrayName' ), array( 'arrayName' => $id)));





          // $categoryProducts = DB::table('multiplecategories')
          //   ->join('products', 'multiplecategories.product_id', '=', ' products.id')
          //   ->join('categories', 'multiplecategories.categories_id', '=', 'categories.id')
          //   ->select('multiplecategories.categories_id , multiplecategories.product_id, products.title')
          //   ->where('multiplecategories.categories_id',$id);

         
          //$categoryProduct = DB::table('skelb')->join('categories','id' = '')
        //   return view( 'categorylist/show' )->with( 'category', $category );
          return view('categorylist/show', compact(  'category', 'categorys', 'categoryProducts'));
     }

  //    public function categorylist(){

  //      // $products = DB::table('products')->paginate(3);
  //       $categorys = DB::select('SELECT * FROM `categories` ');
  //       // $categorys = DB::table('categories');
  //         return view('categorylist/show', compact('products', 'categorys'));
  // }
     

}

// SELECT categories.*, products.*
// FROM categories
// INNER JOIN products ON categories.id=products.category_id 
// INNER JOIN multiplecategories ON  products.id = multiplecategories.product_id
// WHERE categories.id =3

// SELECT categories.*, products.* 
// FROM categories 
// INNER JOIN products ON categories.id = products.category_id 
// INNER JOIN multiplecategories ON products.category_id = multiplecategories.categories_id 

// WHERE multiplecategories.categories_id = 3

// SELECT categories.*, products.* 
// FROM categories 
// INNER JOIN multiplecategories ON categories.id = multiplecategories.category_id 
// INNER JOIN multiplecategories ON products.id = multiplecategories.product_id
// WHERE multiplecategories.categories_id = 3

// FINAL
// SELECT multiplecategories.categories_id, multiplecategories.product_id, products.title
// FROM multiplecategories
// INNER JOIN products ON multiplecategories.product_id = products.id
// INNER JOIN categories On multiplecategories.categories_id = categories.id

// WHERE multiplecategories.categories_id = 3