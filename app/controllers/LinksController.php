<?php

use MyAdm\Exceptions\NonExistentHashException;
use MyAdm\Validation\ValidationException;

class LinksController extends \BaseController {

	/**
	 * Show the form for creating a new resource.
	 * GET /links/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('links.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /links
	 *
	 * @return Response
	 */
	public function store()
	{
		try
		{
			$hash = Little::make(Input::get('url'));
		}
		catch (ValidationException $e)
		{
			return Redirect::home()->withErrors($e->getErrors())->withInput();
		}

		return Redirect::home()->with([
			'flash_message' => 'Here you go! ' . link_to($hash, null, ['target' => '_blank']),
			'hashed'        => $hash
		]);
	}

	public function translateHash($hash)
	{
		try
		{
			$url = Little::getUrlByHash($hash);

			return Redirect::to($url);
		}
		catch (nonExistentHashException $e)
		{
			return Redirect::home()->withFlashMessage('Sorry - could not find a URL associated wtih that hash.');
		}
	}

}