<?php
class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	//----------------Admin-------------------//
	public function showAdmin()
	{

		return View::make('admin');
	}


	public function showAbout()
	{
		return View::make('about');
	}


	public function showAddCategory()
	{
		return View::make('add-category');
	}

	public function showAddProduct()
	{
		$list = SubCategory::all();
		return View::make('add-product',compact('list'));

	}

	public function showEditProduct()
	{
		return View::make('edit-product');
	}
//--------------Add Category-----------
	public function doAddCategory()
	{
		$rules = array(
			'add-category' =>'required',
		);

		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('add-category')->withErrors($validator);
		}
		else{
			if(Category::add_category(Input::get('add-category'))){
				return Redirect::to('category');
			}

			else{
				Session::put('error','Category đã tồn tại');
				return Redirect::to('add-category');
			}
		}
	}

//---------------------Show Category------------

public function list_category($id=1,$id2=1){
	$list = Category::all();
	$list_sub = SubCategory::where('id_category',$id)->get();
	$prd = Product::where('id_sub_category',$id2)->get();

	return View::make('category', compact(['list','list_sub','prd']));
}
//------------------- Add Product-----------
public function doAddProduct(){
	$rules = array(
		'name_product' =>'required',
		'price_product'=>'required',
		'id_sub_category' =>'required',
		'name_product' => 'unique:product,name_product'

	);

	$validator = Validator::make(Input::all(),$rules);
	if($validator->fails()){
		return Redirect::to('add-product')->withErrors($validator);
	}
	else{
			$product = new Product();
			$product->name_product = Input::get('name_product');
			$product->price_product = Input::get('price_product');
			$product->id_sub_category = Input::get('id_sub_category');

			$product->save();
		return Redirect::to('category');
		}


	}

	// ----------- Show Product----------


public function showProduct(){
	$list = Product::all();
	return View::make('product',compact('list'));
}
	//----------------Show Add Sub Product--------

	public function showAddSubCategory()
	{
		$list = Category::all();
		return View::make('add-sub-category',compact('list'));
	}

	public function doAddSubCategory()
	{
		$rules = array(
			'name_sub_category' =>'required',

			'id_category' =>'required',


		);

		$validator = Validator::make(Input::all(),$rules);
		if($validator->fails()){
			return Redirect::to('add-sub-category')->withErrors($validator);
		}
		else{
			$product = new SubCategory();
			$product->name_sub_category = Input::get('name_sub_category');

			$product->id_category = Input::get('id_category');

			$product->save();
			return Redirect::to('category');
		}
	}
//------------------- Delete---------

	public function deleteProduct($id){
		$product = Product::find($id);

		$product->delete();

		$list = Product::all();
		return View::make('product',compact('list'));
	}

	public function deleteSubCategory($id){
		$sub = SubCategory::find($id);

		$sub->delete();

		return View::make('category');
	}
}
