<?php

namespace App\Http\Middleware;

use Closure;

class LocaleRedirect
{
    public function handle($request, Closure $next)
    {
        $requestLocale = $request->segment(1);
        $userLocale = session('locale');

        if ($requestLocale !== $userLocale)
        {
            $segments = $request->segments();
            array_shift($segments);
            array_unshift($segments, $userLocale);

            return redirect()->to(implode('/', $segments));
        }

        return $next($request);
    }
}
