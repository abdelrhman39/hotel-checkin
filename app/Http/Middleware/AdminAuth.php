<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }

        // يمكنك إضافة المزيد من التحقق هنا إذا كان لديك أدوار مختلفة
        // مثلاً التحقق من أن المستخدم هو admin

        return $next($request);
    }
} 