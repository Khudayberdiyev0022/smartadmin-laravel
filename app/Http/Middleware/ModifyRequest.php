<?php

namespace App\Http\Middleware;

use Closure;

class ModifyRequest
{

  public function handle($request, Closure $next)
  {
    $locale = $request->route()->parameter('locale');
    $request->route()->forgetParameter('locale');
    app()->setLocale($locale);

    return $next($request);
  }

}
