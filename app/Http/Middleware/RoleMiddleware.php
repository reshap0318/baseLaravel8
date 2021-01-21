<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,Log};

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $guard = null)
    {
        $uri = $request->route()->uri();
        $user = Auth::user();
        if ($user->inRole($guard)) {
            Log::notice('User '.$user->name.' Mengakses '.$uri);
            return $next($request);
        }else{
            Log::warning('User '.$user->name.' Mengakses '.$uri);
            // toast()->warning('Anda Tidak Memiliki Izin Kesini.', 'Warning');
            // toast()->warning('Silakan Hubungi Admin Untuk Meminta Izin.', 'Warning');
            return redirect()->back();
        }
    }
}
