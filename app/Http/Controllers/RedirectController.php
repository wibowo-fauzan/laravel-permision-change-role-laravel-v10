<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function cek()
    {
        if (auth()->user()->role_id === 1) {
            return redirect('/dashboard/admin/doc-wibi');
        } else {
            return redirect('/doc-code');
        }
    }
}
