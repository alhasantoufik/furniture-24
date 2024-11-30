<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productShow()
    {
        return view('frontend.product');
    }

    public function productByCategory()
    {
        return view('frontend.productByCategory');
    }
}
