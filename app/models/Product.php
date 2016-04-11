<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Product extends Eloquent
{
	public $table = 'product';
	public $timestamps = false;

	//



	//Add product
//	public static function add_product($name_product,$name_category,$price_product){
//
//		$b = Product::where('name_product', '=', $name_product)->count();
//
//		if($b > 0){
//			return false;
//		}
//		else{
//			return true;
//		}
//	}



}





