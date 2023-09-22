<?php

namespace App\Services;

class ChangeLangService
{
    public function changeLang($request)
    {
        $old_lang = app()->getLocale();
        if (in_array($request->lang, config('app.locales'))) {
            $locale = $request->lang;
            app()->setLocale($locale);
        } else {
            return redirect('/'.config('app.locales'));
        }

        $referer = explode('/', $request->headers->get('referer'));

        $referer = str_replace($old_lang, $locale, $referer);

        $referer[3] = $locale;

        return $referer;
    }
}
