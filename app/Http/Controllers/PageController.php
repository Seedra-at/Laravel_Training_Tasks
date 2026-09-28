<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
      $products=[
      ['laptop','HP','500'],
      ['iphone','Apple',900],
      ['phone','Samsung','400']
      ];

      return view('about',['products'=>$products]);
    }
}
