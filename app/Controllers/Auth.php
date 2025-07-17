<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $model;
    
    public function __construct()
    {
        $this->model = new UserModel();
        helper(['form', 'url', 'session']);
    }

    // Halaman Login
    public function login()
    {
        return view('auth/login');
    }

    // Proses Login
    public function attemptLogin()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $user = $this->model->getUser($email);
        
        if (!$user) {
            session()->setFlashdata('error', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
        
        if (!password_verify($password, $user['password'])) {
            session()->setFlashdata('error', 'Password salah');
            return redirect()->to('/login');
        }
        
        session()->set([
            'id' => $user['id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'logged_in' => true
        ]);
        
        return redirect()->to('/dashboard');
    }

    // Halaman Register
    public function register()
    {
        return view('auth/register');
    }

    // Proses Register
    public function attemptRegister()
    {
        $rules = [
            'username' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'matches[password]'
        ];
        
        if (!$this->validate($rules)) {
            return redirect()->to('/register')
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }
        
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];
        
        $this->model->save($data);
        
        session()->setFlashdata('success', 'Registrasi berhasil. Silakan login.');
        return redirect()->to('/login');
    }

    // Logout
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}