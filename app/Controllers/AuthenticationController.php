<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthenticationController extends BaseController
{
    public function loginUserIndex()
    {
        return view('authentication/user/login');
    }
}
