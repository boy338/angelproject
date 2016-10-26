<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Repositories\BlogRepository;
use App\Repositories\CategoryRepository;
use App\Http\Requests\PostRequest;

class BlogController extends Controller
{
	/**
	* The BlogRepository instance
	*
	* @var \App\Repositories\BlogRepository
	**/
	protected $blogRepository;

	/**
	* The CategoryRepository instance
	*
	* @var \App\Repositories\CategoryRepository
	*/
	protected $categoryRepository;

    /**
     * Create a new BlogController instance.
     *
     * @param  \App\Repositories\BlogRepository $blogRepository
     * @param  \App\Repositories\CategoryRepository $categoryRepository
     * @return void
    */
    public function __construct(BlogRepository $blogRepository, CategoryRepository $categoryRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->categoryRepository = $categoryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$categories = $this->categoryRepository->all();
        return view('backend.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
		debug($request->all()); exit();
		$this->blogRepository->store($request->all(), $request->user()->id);	
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
