<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index(){
        echo "Admin shop area";
    }

    public function product($type,$id){
        $data['type'] = $type;
        $data['id'] = $id;
        //echo  'Admin Product details are: '.$data['id'].' - '.$data['type'];
        return view('product',$data);
    }
}