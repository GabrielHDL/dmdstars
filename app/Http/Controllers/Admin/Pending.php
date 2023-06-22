<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class Pending extends Controller
{
    public function index() {
        $pendings =Partner::where('isActive', false)->latest('id')->paginate(10);

        return view('admin.pending', compact('pendings'));
    }
}
