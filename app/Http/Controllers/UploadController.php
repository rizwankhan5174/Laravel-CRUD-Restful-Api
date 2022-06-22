<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
   public function __invoke()
       {
         $this->message1();
         $this->message2();
       }
   public function message1()
   {
    echo 'I am Invoked';
   }
   public function message2()
   {
    echo 'I am Invoked2';
   }
}
