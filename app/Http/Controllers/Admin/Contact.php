<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;

class Contact extends Controller
{
    public function show(Partner $partner) {
        return view('admin.contact.show', compact('partner'));
    }
}
