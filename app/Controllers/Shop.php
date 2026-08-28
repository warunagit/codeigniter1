<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function products(){
        return view('products');
    }

    public function product($type){
         $data['type'] = $type;

        // Load the view and pass the data
        return view('product', $data);

       // echo '<h2>The product is '.$type.'</h2>';
        //return view('product',$data);
    }
}
