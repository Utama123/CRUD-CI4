<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        // $username = $this->request->getPost('username');
        // $password = $this->request->getPost('password');

        // $user = $this->userModel->where('username', $username)->first();

        // if ($user && password_verify($password, $user['password'])) {
        //     session()->set([
        //         'user_id' => $user['id'],
        //         'username' => $user['username'],
        //         'role' => $user['role'],
        //         'logged_in' => true,
        //     ]);
        //     return redirect()->to('/dashboard');
        // } else {
        //     return redirect()->back()->with('error', 'Username atau Password salah');
        // }

        /* Debuging password */
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $this->userModel->where('username', $username)->first();

        if (!$user) {
        return redirect()->back()->with('error', 'Username tidak ditemukan');
        }

        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Password salah');
        }

        session()->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['role'],
            'logged_in' => true,
            ]);
        return redirect()->to('/dashboard');

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
