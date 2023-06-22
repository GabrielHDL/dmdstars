<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class Prospects extends Controller
{
    public function index() {

        $prospects = Partner::where('confirm', 'notyet')->where('isActive', true)->latest('id')->paginate(10);

        return view('admin.prospects', compact('prospects'));
    }
}
