<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $userRole = trim(strtolower(Auth::user()->role));

        // Memastikan penanganan jika role dikirim sebagai gabungan string 'tentor,guru'
        $allowedRoles = [];
        foreach ($roles as $role) {
            foreach (explode(',', $role) as $r) {
                $allowedRoles[] = trim(strtolower($r));
            }
        }

        if (!in_array($userRole, $allowedRoles)) {
            abort(403, 'Akses Ditolak: Role Anda (' . $userRole . ') tidak memiliki izin.');
        }

        return $next($request);
    }
}