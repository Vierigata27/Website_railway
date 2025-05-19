<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class UserCookieMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Jika pengguna login dan belum memiliki cookie id_pengguna, buat cookie
        if ($request->user() && !Cookie::has('id_pengguna')) {
            Cookie::queue('id_pengguna', $request->user()->id_pengguna, 60); // 7 hari
        }

        // Jika pengguna tidak login dan tidak memiliki cookie, arahkan ke form pengisian data
        if (!$request->user() && !Cookie::has('id_pengguna')) {
            return redirect('/formpengguna')->with('error', 'Silakan isi data pengguna terlebih dahulu.');
        }

        return $next($request);
    }
}
