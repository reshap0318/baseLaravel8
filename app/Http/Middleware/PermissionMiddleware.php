<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,Log};

class PermissionMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $routeName = $request->route()->getName();
        $uri = $request->route()->uri();
        $user = Auth::user();
        if (empty($routeName) || $user->hasAccess($routeName)) {
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
