<?php

namespace App\Patterns;

use App\Patterns\Product;

class ProductFactory extends AbstractFactory{

	public function getProduct() : Product
	{
		return new Product;
	}
}