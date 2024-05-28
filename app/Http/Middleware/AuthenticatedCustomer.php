<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedCustomer
{
    public function handle(Request $request, Closure $next): Response
    {
        if (! auth()->guard('customer')->check()) {
            return redirect(route('customer.login'));
        }

        return $next($request);
    }
}
