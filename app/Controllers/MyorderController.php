<?php namespace App\Controllers;

use CodeIgniter\Controller;

class MyorderController extends Controller
{
    public function index()
    {
        return view('user/myorder');
    }
}
