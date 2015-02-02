<?php

use Illuminate\Support\MessageBag;

class AdminController extends BaseController {

	/**
	 * Constructs a new AdminController object.
	 */
	public function __construct() {
		// ensure the user is authenticated and an admin
		$this->beforeFilter('auth.admin');
	}

	/*
	|--------------------------------------------------------------------------
	| Administration Controller
	|--------------------------------------------------------------------------
	|
	| Handles operations related to administrative functionality.
	|
	*/

	/**
	 * Performs a re-direct to the administration screen.
	 *
	 * @return Redirect
	 */
	public function getIndex() {
		return View::make('pages.admin.index');
	}
}
