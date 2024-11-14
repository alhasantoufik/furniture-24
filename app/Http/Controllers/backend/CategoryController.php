<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function categoryList()
    {
        $categories = Categories::all();
        return view('backend.categoryList', compact('categories'));
    }

    public function categoryForm()
    {
        return view('backend.pages.categoryForm');
    }

    public function categoryStore(Request $request)
    {
        Categories::create([
            'name'=> $request->category_name,
            'description'=> $request->category_description,
            'status'=> $request->status_select,
        ]);

        return redirect()->back();
    }

    public function editList($edit_id)
    {
        $categories = Categories::find($edit_id);
        return view('backend.pages.categoryForm', compact('categories'));

        
    }

    public function deleteList($delete_id)
    {
        Categories::find($delete_id)->delete();

        return redirect()->back();
    }

    
}

