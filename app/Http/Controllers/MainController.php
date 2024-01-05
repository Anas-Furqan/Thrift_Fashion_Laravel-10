<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }

    public function checkout()
    {
        return view("checkout");
    }

    public function contactPage()
    {
        return view("contactPage");
    }

    public function productPage()
    {
        return view("productPage");
    }

    public function productPage2()
    {
        return view("productPage2");
    }

    public function productPage3()
    {
        return view("productPage3");
    }
}
