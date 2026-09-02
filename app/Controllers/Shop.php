<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string{
        return view('shop');
    }

    public function products(){
        return view('products');
    }

    public function product($type,$id){
         $data['type'] = $type;
         $data['id'] = $id;

        // Load the view and pass the data
        //echo '<h2>The product type is: '.$type.'. Product id is: '.$id.'</h2>';
        return view('product',$data);
    }
}