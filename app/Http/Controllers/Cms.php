<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests, App\Patterns\ProductFactory, App\Patterns\Product;

class Cms extends Controller
{
    public function __construct(Request $request)
    {
    	//parent::__construct($request);

    	//$this->middleware('auth');
    }

    public function testCms(Request $request)
    {
    	$factory = new ProductFactory();

    	$factory->getProduct();


    	exit;
    }


}


