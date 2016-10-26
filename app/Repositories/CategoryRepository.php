<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    /**
     * Create a new CategoryRepository instance.
     *
     * @param  \App\Models\Category $category
     * @return void
     */
    public function __construct(Category $category)
    {
        $this->model = $category;
    }

    /**
     * Get all roles.
     *
     * @return \Illuminate\Support\Collection
     */
    public function all()
    {
        return $this->model->all();
    }

	/** 
	* Create Category
	* 
	* @param array $inputs
	* @return \App\Models\Category
	*/
	public function store($inputs)
	{
		$this->model->category = $inputs['category'];
		$this->model->save();
		return $this->model;
	}

    /**
     * Update roles.
     *
     * @param  array  $inputs
     * @return void
     */
    public function update($inputs)
    {
        foreach ($inputs as $key => $value) {
            $category = $this->category->whereCategory($key)->firstOrFail();
            $category->category = $value;
            $category->save();
        }
    }
}
