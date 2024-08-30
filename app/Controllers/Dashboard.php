<?php namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Dashboard']; // Pass title for layout
        return view('dashboard', $data);
    }
}
