<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class CheckLoginKhachHang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      if(Auth::guard('KhachHang')->check())
      {
           return $next($request);
      }
    else
    {
        return redirect('giohang')->with('mess','vui lòng đăng nhập vào tài khoản để tiếp tục thanh toán');
    }
  }  
}
