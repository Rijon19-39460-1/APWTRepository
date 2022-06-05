<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function productList(){
        $product = array();

        for($i=1; $i<6; $i++){
            $product = array(
                "name" => "PD " . ($i),
                "id" => ($i),
                "price"=> rand(5000,8000),

            );
            $products[] = (object)$product;
        }

        return view('products')->with('products', $products);
    }
}
