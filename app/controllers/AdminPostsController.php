<?php

class AdminPostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin/posts
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = Post::all();

        return View::make('admin.posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminposts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /admin/posts/{id}
	 *
	 * @param  string  $title
	 * @return Response
	 */
    public function show($title)
    {
        $post = Post::whereslug(urldecode($title))->first();
        return View::make('admin.posts.show', compact('post'));
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /adminposts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /admin/posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /adminposts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}