<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function productList(Request $request)
    {
        if ($request->ajax()) {

            $data = Product::query();

            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
          
        return view('backend.productList');
    }

    public function productForm()
    {
        $products = Product::with('categories')->get();
        $categories = Categories::all();
        return view('backend.pages.productForm',compact('products','categories'));
    }

    public function productStore(Request $request)
    {



        $fileName= null;
        if ($request->hasFile('product_image')) 
        {
        $file= $request->file('product_image');
        $fileName = date('Ymdhis').'.'. $file->getClientOriginalName();
        $file->storeAs('/', $fileName);

        }

        Product::create([
            'name'=> $request->product_name,
            'description'=> $request->product_description,
            'image'=>$fileName,
            'price'=> $request->product_price,
            'stock_quantity'=> $request->product_stock,
            'category_id'=> $request->product_category,
        
        ]);

        return redirect()->back();
    }


}
