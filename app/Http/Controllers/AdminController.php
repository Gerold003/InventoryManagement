<?php
// filepath: /C:/xampp/htdocs/TrackNetIT9/app/Http/Controllers/AdminController.php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard'); // Ensure this view exists
    }

    public function stockmanager()
    {
        return view('admin.stockmanager'); // Ensure this view exists
    }
    public function supplier()
    {
        return view('admin.suppliers'); // Ensure this view exists
    }
    public function report()
    {
        return view('admin.reports'); // Ensure this view exists
    }
    public function order()
    {
        return view('admin.orders'); // Ensure this view exists
    }
}