<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
	private $userModel;
	public function __construct()
	{
		$this->userModel = new UserModel();
	}
	public function index()
	{
		return view('users', [
			'users' => $this->userModel->findAll()
		]);
	}
}
