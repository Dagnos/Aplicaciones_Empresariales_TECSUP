<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function getIndex()
	{
		return 'monstrando albumes del usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCrearAlbum()
	{
		return 'formulario de crear Albumes';
	}
	public function postCrearAlbum()
	{
		return 'almacenando Album';
	}
	public function getActualizarAlbum()
	{
		return 'formulario de actualizar Album';
	}
	public function postActualizarAlbum()
	{
		return 'actualizar Album';
	}
	public function getEliminarAlbum()
	{
		return 'formulario de eliminar Album';
	}
	public function postEliminarAlbum()
	{
		return 'eliminando Album';
	}
	public function missingMethod($parameters=array())
	{
		abort(404);
	}
}
