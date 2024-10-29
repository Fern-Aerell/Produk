<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $setting = Setting::first();
        if($setting) {
            $title = $setting->title;
        }else{
            $title = '';
        }
        
        return view('dashboard', [
            'status' => session('status'),
            'title' => $title,
        ]);
    }
}
