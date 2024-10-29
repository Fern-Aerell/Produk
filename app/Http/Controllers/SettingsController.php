<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index() {
        $setting = Setting::first();
        if($setting) {
            $title = $setting->title;
        }else{
            $title = '';
        }
        return view('settings', [
            'status' => session('status'),
            'title' => $title,
        ]);
    }

    public function titleUpdate(Request $req) {
        $req->validate([
            'title' => ['required', 'string']
        ]);

        $setting = Setting::first();
        if(!$setting) {
            Setting::create($req->all());
        }else{
            $setting->update($req->all());
        }

        return redirect()->back()->with('status', 'title-updated');
    }
}
