<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Cek apakah user sudah login
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        
        $data = [
            'title' => 'Dashboard',
            'user' => [
                'username' => session()->get('username'),
                'email' => session()->get('email')
            ]
        ];
        
        return view('dashboard', $data);
    }
}