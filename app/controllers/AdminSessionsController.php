<?php

class AdminSessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /adminsessions
	 *
	 * @return Response
	 */
	public function index()
	{
        //
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /adminsessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
        if(Auth::check()) return Redirect::to('admin');
        return View::make('admin/sessions/create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /adminsessions
	 *
	 * @return Response
	 */
	public function store()
	{
        if(Auth::attempt(Input::only('email','password'))){
            return Redirect::to('admin');
        }
        return Redirect::back()->withInput();
	}

	/**
	 * Display the specified resource.
	 * GET /adminsessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /adminsessions/{id}/edit
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
	 * PUT /adminsessions/{id}
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
	 * DELETE /adminsessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
        Auth::logout();
        return Redirect::to('admin/login');
	}

}