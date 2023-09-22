<?php

namespace App\Http\Controllers;

use App\Services\ChangeLangService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  private ChangeLangService $changeLang;

  public function __construct(ChangeLangService $changeLang)
  {
    $this->changeLang = $changeLang;
  }

  public function changeLang(Request $request): RedirectResponse
  {
    $referer = $this->changeLang->changeLang($request);

    return redirect()->to(implode('/', $referer));
  }

  public function index()
  {
    return view('index');
  }
}
