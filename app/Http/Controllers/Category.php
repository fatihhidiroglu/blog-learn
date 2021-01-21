<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    public function adobe() {
      return view('category.adobe');
    }
    public function flutter() {
      return view('category.flutter');
    }
    public function laravel() {
      return view('category.laravel');
    }
    public function php() {
      return view('category.php');
    }
}
