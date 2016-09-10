<?php

namespace App\Http\Middleware;

use Closure;
use Authenticatable;
use Auth;
class AdminMiddleWare
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
      if (Auth::user()["email"]!="steevekunze@gmail.com")
       {
         return redirect('/backoffice?adm=no');
       }
        return $next($request);
    }

}
