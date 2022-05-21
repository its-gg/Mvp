<?php

namespace App\Controllers;

use App\Models\AdminUser;

class Admin extends BaseController
{
    public function index()
    {
        helper(['form']);
        return view("Admin/login");
    }
    public function login()
    {
        $session = session();
        $admin = new AdminUser();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $admin->where('email', $email)->where('password', $password)->first();
        if ($user) {
            $session = \Config\Services::session();
            $session->set('user', $user);
            $session->set('isLoggedIn', true);
            return redirect()->to(base_url('/dashboard'));
        } else {
            $session->setFlashdata('error', 'Invalid Email or Password');
            return redirect()->to(base_url('/admin'));
        }
        // print_r($this->request->getPost());
    }
}
