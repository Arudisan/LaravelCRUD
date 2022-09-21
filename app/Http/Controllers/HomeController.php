<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home() {
    return view('pages.home');
   }
   public function about() {
    return view('pages.about');
   }
    public function contact() {
    return view('pages.contact');
    }
    public function pricing() {
    return view('pages.pricing');
    }
    public function worksingle() {
        return view('pages.worksingle');
    }
    public function work() {
    return view('pages.work');
     }
}
