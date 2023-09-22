<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait Locale
{
  public static function bootLocale()
  {
    static::saving(function ($model) {
      $model->slug = Str::slug($model->title_uz);
    });
  }

  public function getTitle()
  {
    $title = 'title_'.app()->getLocale();

    return $this->$title;
  }

  public function getText()
  {
    $title = 'body_'.app()->getLocale();

    return html_entity_decode($this->$title);
  }

  public function getAddress()
  {
    $title = 'address_'.app()->getLocale();

    return $this->$title;
  }

  public function getMetaTitle()
  {
    $title = 'meta_title_'.app()->getLocale();

    return $this->$title;
  }

  public function getMetaDesc()
  {
    $title = 'meta_description_'.app()->getLocale();

    return $this->$title;
  }

  public function getMetaKeys()
  {
    $title = 'meta_keywords_'.app()->getLocale();

    return $this->$title;
  }
}
