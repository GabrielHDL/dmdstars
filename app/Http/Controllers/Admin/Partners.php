<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class Partners extends Controller
{
    public function index() {

        $partners = Partner::where('confirm', 'confirmed')->where('isActive', true)->latest('id')->paginate('10');

        return view('admin.partners', compact('partners'));
    }
}
