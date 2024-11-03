<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Agent;
use CodeIgniter\HTTP\ResponseInterface;

class AgentController extends BaseController
{
    public function index()
    {
        $agents = new Agent();
        $agents->findAll();

        return view('');
    }
}
