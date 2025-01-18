<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class GuestMiddleware implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Jika pengguna sudah login, alihkan ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to('/dashboard');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada tindakan setelah proses
    }
}
