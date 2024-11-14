@extends('backend.master')
@section('content')
<div class="container mt-1">
    <h1>Add Category</h1>
<form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input name="category_name" type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Category Name</label>
      </div>
    </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input name="category_description" type="text" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">Category Description</label>
  </div>

  <!-- Text input -->
  <select name="status_select" class="form-select md-4" aria-label="Default select example">
  <option selected>Select Action</option>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
  </select>
  <label class="form-label" for="form6Example3">Action</label>



  <!-- Submit button -->
  <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mt-4 mb-4" >Add Category</button>
</form>
</div>

<script>
    // Initialization for ES Users
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });
</script>

@endsection