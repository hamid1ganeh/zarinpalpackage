<?php
namespace Hamid1ganhe2s\Payment\Middleware;
use Closure;

class CheckAccess
{
    public function handle($request,\Closure $next)
    {
        return 'no-access';
        return $next($request);
    }

}
