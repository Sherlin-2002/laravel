<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }
    public function view_category()
    {
        return view('admin.category');
    }
    
}
