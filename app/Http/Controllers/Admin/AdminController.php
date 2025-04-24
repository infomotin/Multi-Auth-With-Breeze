<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.dashboard');
    }

    public function AdminProfile()
    {
        return view('admin.profile');
    }

    public function AdminSettings()
    {
        return view('admin.settings');
    }
}
