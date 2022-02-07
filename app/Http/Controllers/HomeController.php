<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index() {
    return view('home');
  }

  public function hotels() {
    $data = [
      'titlePage' => "Hotels"
    ];
    return view('hotels', $data);
  }

  public function contacts() {
    $data = [
      'contact' => "Patrizia Crimi"
    ];
    return view('contacts', $data);
  }
}
