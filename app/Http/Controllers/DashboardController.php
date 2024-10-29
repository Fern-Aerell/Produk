<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard', [
            'status' => session('status')
        ]);
    }
}
