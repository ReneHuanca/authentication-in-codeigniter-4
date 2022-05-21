<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    protected $helpers = ['form'];

    public function create()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->route('dashboard');
        }

        return view('auth/login');
    }

    public function store()
    {
        $rules = [
			'email'    => 'required|valid_email',
			'password' => 'required',
        ];

		if (!$this->validate($rules)) {
			return view('auth/login', [
                'errors' => $this->validator
            ]);
		}

        $email    = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = (new UserModel())->where('email', $email)->first();

        if (null === $user) {
            return redirect()->back()->with('msg', 'Email does not exist.');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->back()->with('msg', 'Password is incorrect.');
        }

        session()->set([
            'user'       => $user,
            'isLoggedIn' => true
        ]);

        return redirect()->route('dashboard');
    }

    public function logout()
    {
        session()->destroy();

        return redirect('/');
    }
}
