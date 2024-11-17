@extends('backend.master')
@section('content')
<div class="container mt-1">
    <h1>Add Product</h1>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
      <label class="form-label" for="form6Example1">Product Name</label>
        <input name="product_name" type="text" id="form6Example1" class="form-control" />
        
      </div>
    </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form6Example3">Product Description</label>
    <input name="product_description" type="text" id="form6Example3" class="form-control" />
    
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    
    <label class="form-label" for="form6Example3">Product Price</label>

    <input name="product_price" type="text" id="form6Example3" class="form-control" />
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form6Example3">Product Stock</label>
    <input name="product_stock" type="text" id="form6Example3" class="form-control" />
   
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form6Example3">Select Category</label>
  <select name="product_category" class="form-select md-4" aria-label="Default select example">
  <option selected>Select Category</option>
 @foreach ($categories as $item )
 <option value="{{$item->id}}">{{$item->name}}</option>
 @endforeach
  </select>
  
  </div>


  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mt-4 mb-4" >ADD Product</button>
</form>
</div>

<script>
    // Initialization for ES Users
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });
</script>

@endsection