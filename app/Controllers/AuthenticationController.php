<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationController extends BaseController
{
    public function loginUserIndex()
    {
        return view('authentication/user/login');
    }
    
    public function registerUserIndex()
    {
        return view('authentication/user/register');
    }

    public function loginUser() 
    {
        $session = session();

        
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        ob_start();
        var_dump([$email, $password]);

        $user = new User();
        $data = $user->where('email', $email)->first();

        if($data) {
            $pass = $data['password'];
            if(password_verify($password, $pass)) {
                $session->set([
                    'email' => $user->email,
                    'logged_in' => true
                ]);
                return redirect()->route('home');
            } else {
                $session->setFlashData('error', 'Your password is wrong');
                return redirect()->back();
            }
        } else {
            $session->setFlashData('error', 'This email is not exist');
            return redirect()->back();
        }
    }

    public function registerUser() 
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required|min_length[3]|max_length[50]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]',
        ]);

        if(!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }

        $user = new User();
        $user->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
        ]);
    }
}
