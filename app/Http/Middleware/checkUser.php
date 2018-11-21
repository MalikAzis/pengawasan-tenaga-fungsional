<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;

class checkUser
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
        if (Auth::user()->user_fungsional == null) {
            Session::flash('flash_message', 'User tidak terdaftar');
            Session::flash('flash_type', 'alert-danger');
            return Redirect::route('logout');
        } else {
            if(Auth::user()->user_fungsional->m_akses_fitur_id == 5 && Auth::user()->user_fungsional->m_akses_aplikasi_id == 3) {
                Session::flash('flash_message', 'User tidak memilki akses');
                Session::flash('flash_type', 'alert-danger');
                return Redirect::route('dashboard');
            }
        }


        return $next($request);
    }
}
