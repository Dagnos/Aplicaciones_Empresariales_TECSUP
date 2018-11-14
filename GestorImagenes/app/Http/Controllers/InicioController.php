<?php namespace GestorImagenes\Http\Controllers;

class InicioController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return view('inicio');
	}
	public function missingMethod($parameters=array())
	{
		abort(404);
	}
}
