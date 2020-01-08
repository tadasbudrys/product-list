<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
     
        $categories = [ 'Branded Foods', 'Households', 'Veggies & Fruits', 'Kitchen', 'Bread & Bakery' ];
        foreach ( $categories as $category ) {
          # First fetch category Id
          $category        = DB::table( 'categories' )->where( 'name', '=', trim( strtolower( $category ) ) )->get();
          $category_id     = $category[0]->id;
    
          DB::table( 'products' )->insert( [
            'title'          => 'Product for ' . $category[0]->name,
            'image'          => 'http://via.placeholder.com/600x400',
            'category_id'    => $category_id,
        
           
          ] );
    }
}
}