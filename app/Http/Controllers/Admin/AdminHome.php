<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class AdminHome extends Controller
{
    public function index() {
        $pending =Partner::where('isActive', false)->get();
        $prospects = Partner::where('confirm', 'notyet')->where('isActive', true)->get();
        $partners = Partner::where('confirm', 'confirmed')->where('isActive', true)->get();
        $rejected = Partner::where('confirm', 'rejected')->where('isActive', true)->get();

        return view('admin.index', compact('partners', 'prospects', 'pending', 'rejected'));
    }
}
