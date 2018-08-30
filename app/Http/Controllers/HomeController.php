<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('ux_interface.index');
    }
    public function about_us(){
        return view('ux_interface.about_us');
    }
    public function service(){
        return view('ux_interface.service');
    }
    public function portfolio(){
        return view('ux_interface.portfolio');
    }
    public function blog(){
        return view('ux_interface.blog');
    }
    public function single_blog(){
        return view('ux_interface.single_blog');
    }
    public function elements(){
        return view('ux_interface.elements');
    }
    public function contact(){
        return view('ux_interface.contact');
    }
}
