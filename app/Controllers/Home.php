<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function register()
    {
        echo view('register');
    }

    public function registerProcess()
    {
        helper(['form']);

        $rules = [
            'firstname' => 'required|min_length[3]|max_length[50]',
            'lastname'  => 'required|min_length[3]|max_length[50]',
            'email'     => 'required|min_length[6]|max_length[100]|valid_email|is_unique[users.email]',
            'password'  => 'required|min_length[6]|max_length[255]',
            'password_confirm' => 'matches[password]',
        ];

        if (! $this->validate($rules)) {
            return view('register', [
                'validation' => $this->validator
            ]);
        }

        $model = new UserModel();

        $newData = [
            'firstname' => $this->request->getPost('firstname'),
            'lastname'  => $this->request->getPost('lastname'),
            'email'     => $this->request->getPost('email'),
            'password'  => $this->request->getPost('password'),
        ];

        $model->save($newData);

        return redirect()->to('/login')->with('success', 'Registration successful!');
    }

    public function login()
    {
        echo view('login');
    }

    public function loginProcess()
    {
        helper(['form']);
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return view('login', [
                'validation' => $this->validator
            ]);
        }

        $model = new UserModel();
        $user = $model->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            $session = session();
            $session->set('logged_in', true);
            $session->set('user_id', $user['id']);
            $session->set('user_name', $user['firstname'] . ' ' . $user['lastname']);
            
            return redirect()->to('/');
        } else {
            return view('login', [
                'error' => 'Invalid email or password'
            ]);
        }
    }

    public function index()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('home');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login')->with('success', 'Logged out successfully.');
    }

    
}
