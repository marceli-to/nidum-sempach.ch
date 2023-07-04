<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{

  // public function landing($state = NULL)
  // { 
  //   return view('frontend.pages.landing', ['state' => $state]);
  // }

  public function index()
  {
    return view('frontend.pages.home');
  }

  public function project()
  {
    return view('frontend.pages.project');
  }

  public function extension()
  {
    return view('frontend.pages.extension');
  }

  public function impressions()
  {
    return view('frontend.pages.impressions');
  }

  public function privacy()
  {
    return view('frontend.pages.privacy');
  }

  public function imprint()
  {
    return view('frontend.pages.imprint');
  }
}
