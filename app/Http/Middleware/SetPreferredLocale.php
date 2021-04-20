<?php

namespace App\Http\Middleware;

use Closure;

class SetPreferredLocale
{
    public function handle($request, Closure $next)
    {
        // Force use first supported language as primary language
        $locales = array_column(config('project.supported_languages'), 'short_code');
        app()->setLocale($locales[0]);

        // Auto-detect locale between browser and supported languages
        // $locales  = array_column(config('project.supported_languages'), 'short_code');
        // $language = $request->getPreferredLanguage($locales);
        // app()->setLocale($language);

        return $next($request);
    }
}
