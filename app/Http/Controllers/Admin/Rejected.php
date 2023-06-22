<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class Rejected extends Controller
{
    public function index() {
        $rejects = Partner::where('confirm', 'rejected')->where('isActive', true)->latest('id')->paginate(10);

        return view('admin.rejected', compact('rejects'));
    }
}
