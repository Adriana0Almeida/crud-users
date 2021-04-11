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
			'users' => $this->userModel->paginate(5),
			'pager' => $this->userModel->pager
		]);
	}

	public function create(){
		return view('form');
	}

	public function delete($id = null){
		if($id){
			$resp = $this->userModel->delete($id);

			if($resp){
				echo view('messages', [
					'message' => 'Usuário excluído com sucesso!'
				]);
			}else{
				echo view('messages', [
					'message' => 'Erro ao tentar excluir, tente novamente!'
				]);
			}
		}
	}
}
