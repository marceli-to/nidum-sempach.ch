<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function __construct()
  {
  }

  public function index()
  {
    return view('frontend.pages.contact');
  }

  public function subscribed()
  {
    return view('frontend.pages.contact', ['showAlert' => '1']);
  }
}
