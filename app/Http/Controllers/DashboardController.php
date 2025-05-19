<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
     // Ambil ID pengguna dari cookie
     $id_pengguna = Cookie::get('id_pengguna');

     if (!$id_pengguna) {
         return redirect('/');
     }
     return view('frontend.dashboard.index', compact('id_pengguna'));
    }
}
