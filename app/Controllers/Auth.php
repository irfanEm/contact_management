<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function doLogin()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            $session->set('user_id', $user['id']);
            return redirect()->to('/contacts');
        }

        return redirect()->back()->with('error', 'Email atau password salah');
    }

    public function logout()
    {
        // Hapus hanya data login
        session()->remove(['user_id', 'user_email']); // sesuaikan dengan yang kamu set saat login

        return redirect()->to('/login')->with('message', 'Anda telah logout !');
    }

}
