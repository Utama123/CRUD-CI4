<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard/index');
    }

    public function logout()
{
    session()->destroy();
    return redirect()->to('/login')->with('success', 'Anda telah logout.');
}

}
