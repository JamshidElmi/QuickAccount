<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_bill;

class HomeController extends Controller
{
   public function adminHome()
   {
       $data = [
           'category_name' => 'dashboard',
           'page_name' => 'sales',
           'has_scrollspy' => 0,
           'scrollspy_offset' => '',
       ];
    return view('ncms.dashboard')->with($data);
   }

   public function userHome()
   {
       return view('cms.user.home');
   }
}
