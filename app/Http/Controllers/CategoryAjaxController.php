<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\CategoryRepository;

class CategoryAjaxController extends Controller
{
    
	/**
	* The CategoryRepository instance
	*
	* @var App\Repositories\CategoryRepository
	**/
	protected $categoryRepository;

	/**
	* Create a new CategoryAjaxController instance
	*
	* @param \App\Repositories\CategoryRepository $categoryRepository
	* @return void
	**/
	public function __construct(CategoryRepository $categoryRepository)
	{
		$this->categoryRepository = $categoryRepository;	
	}

	/**
	* Create new category for category table
	*
	* @param \Illuminate\Http\Request $request
	* @param \App\Models\Category $category
	* @return \Illuminate\Http\Response
	**/
	public function categoryNew(Request $request)
	{
		$category = $this->categoryRepository->store($request->all());
		
		return response()->json($category->toArray());
	}
}
