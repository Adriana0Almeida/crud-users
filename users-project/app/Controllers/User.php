<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
	private $userModel;
	public function __construct()
	{
		$this->userModel = new UserModel();
	}
	
	public function index(){
		return view('users', [
			'users' => $this->userModel->orderBy('id', 'DESC')->findAll(),
			'pager' => $this->userModel->pager
		]);
	}

	public function create()
	{
		return view('form');
	}

	public function store()
	{
		$insert = $this->userModel->save($this->request->getPost());	
		if($insert){
			return view('messages', [
				'message' => 'Salvo com sucesso!'
			]);
		}else{
			echo view('messages', [
				'message' => 'Erro ao tentar salvar, tente novamente!'
			]);
		}		
	}

	public function edit($id = null)
	{
		if($id){
			return view('form', [
				'user' => $this->userModel->find($id)
			]);
		}
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
