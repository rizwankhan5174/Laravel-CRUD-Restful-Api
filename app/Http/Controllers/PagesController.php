<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public  function about()
    {
        return view('about');
    }
    public function home()
    {
        echo "Home Page";
    }
    public function contact()
    {
        echo "Contact Page";
    }
    public function getData(Request $req)
    {
       return $req->all();
    }
}
