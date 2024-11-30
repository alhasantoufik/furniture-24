<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
       
        return view("frontend.home");
    }

    public function showCategory($id)
    {
       
        return view("frontend.productByCategory");
    }
}
