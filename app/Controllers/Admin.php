<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('layout/admin/index');
    }

    public function analytics(): string
    {
        return view('layout/admin/analytics');
    }

    public function dataRestoration(): string
    {
        return view('layout/admin/dataRestoration');
    }

    public function logout() {
        // logic for logging out user

        return redirect()->to('/login');
    }
}