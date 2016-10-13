<?php

namespace App\Patterns;

use App\Patterns\Product;

abstract class AbstractFactory{

	abstract public function getProduct() : Product;


}