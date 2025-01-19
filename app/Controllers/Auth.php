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

    public function register()
    {
        return view('auth/register');
    }

    public function processRegister()
    {
        $validation = \Config\Services::validation();

        // Validasi input
        $rules = [
            'username' => 'required|min_length[3]|is_unique[users.username]',
            'password' => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data user baru
        $userModel = new UserModel();
        $userModel->insert([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role' => 'user', // Default role
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
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
