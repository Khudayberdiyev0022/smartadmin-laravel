<?php

if (!function_exists('localeRoute')) {
  function localeRoute($name, $parameters = [], $absolute = true)
  {
    $locale = app()->getLocale();
    if (!is_array($parameters)) {
      $params[] = $parameters;
    } else {
      $params = $parameters;
    }
    if (session('locale')) {
      $locale = session('locale');
    }

    /*foreach($params as $id=>$p){
        if ($p==null) dd($id);
    } */

    return app('url')->route($name, array_merge($params, ['locale' => $locale]), $absolute);
  }
}
