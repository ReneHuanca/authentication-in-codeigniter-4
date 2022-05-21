<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Entities\User;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    protected $helpers = ['form'];

	public function create()
	{
		return view('auth/register');
	}

	public function store()
	{
		$rules = [
			'name'            => 'required|min_length[2]|max_length[50]',
			'email'           => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
			'password'        => 'required|min_length[4]|max_length[50]',
			'confirmpassword' => 'matches[password]',
		];

		if (!$this->validate($rules)) {
			return view('auth/register', [
				'errors' => $this->validator
			]);
		}

		$name     = $this->request->getVar('name');
		$email    = $this->request->getVar('email'); 
		$password = $this->request->getVar('password'); 

		$data = [
			'name'     => $name,
			'email'    => $email,
			'password' => password_hash($password, PASSWORD_DEFAULT),
		];
		
		$userId = (new UserModel())->insert($data);
		
		session()->set([
			'user' => new User([
				'id'    => $userId,
				'name'  => $name,
				'email' => $email,
			]),
			'isLoggedIn' => true
		]);
		
		return redirect()->route('dashboard');
	}
}
