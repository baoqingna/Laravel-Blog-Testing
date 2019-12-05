<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller{

  public function Blog(){
    return view('Blog');
  }
}
