<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redis;
use App\Assert;

class Site extends Controller
{
    public function index(Request $request)
    {
    	$list = Assert::getList();
    	
    }
}
