<?php

namespace Simple\App\Controllers;

class PagesController
{

  public function home()
  {
    $page = 'Homepage';
    return view('pages.home', compact('page'));
  }

  public function about()
  {
    $page = 'About';
    return view('pages.about', compact('page'));
  }

  public function contact()
  {
    $page = 'Contact';
    return view('pages.contact', compact('page'));
  }

  public function error()
  {
    return view('pages.error');
  }
}
