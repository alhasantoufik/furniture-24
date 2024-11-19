<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $category=Categories::get();
        return view("frontend.home",compact("category"));
    }

    public function showCategory($id)
    {
        $category = Categories::find($id);
        return view("frontend.productByCategory", compact("category"));
    }
}
