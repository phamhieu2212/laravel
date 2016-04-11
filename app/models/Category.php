<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Category extends Eloquent
{
    public $table = 'category';
    public $timestamps = false;

    //
//	public static function add_category($add_category)
//	{
//		$check = Category::where('name_category', '=', $add_category)->count();
//		if ($check > 0) {
//			return false;
//		} else {
//			Category::insert(
//				['name_category' => $add_category]
//			);
//			return true;
//		}
//	}







}





