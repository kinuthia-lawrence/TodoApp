<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return "This is the home page";
    }

    public function about()
    {
        return "This is the about page";
    }

    public function contact()
    {
        return "This is the contact page";
    }

    public function services()
    {
        return "This is the services page";
    }
    
 public function blog()
    {
        return "This is the blog page";
    }
    
 public function products()
    {
        return "This is the products page";
    }
    
 public function galary()
    {
        return "This is the galary page";
    }
    
}