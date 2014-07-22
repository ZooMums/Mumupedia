<?php

class ArticlesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$data = News::all();
		$data = News::orderBy('seen', 'desc')->get();
		return View::make('articles/list')->with( 'articles' , $data );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('articles/create') ;
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = new News;
		$data->title 		=Input::get('title');  
		$data->content 		=Input::get('content');
		$data->description 	=Input::get('description');
		//$data->category_id 	=Inpit::get('category_id');
		$data-> save();
	
		//$data->category 	=Input::get('category->name');
		
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data = News::find( $id );

		if ( is_null( $data ) ) {

		}
		else {
			$data->seen = $data->seen + 1;
			$data->save();
		}

		return View::make('articles/show')->with( 'article' , $data );
	}


	/**
	 * Show the form for editing the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
