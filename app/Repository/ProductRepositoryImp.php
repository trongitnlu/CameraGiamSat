<?php
/**
*/
namespace App\Repository;
use App\Repository\ProductRepository;
use App\Category;
use App\Model\Product;

class ProductRepositoryImp implements ProductRepository
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public function getProductByCategory($id_category)
	{
		return Category::all();
	}

}



?>