@extends('backend.master')
@section('content')



<div class="container">
<button class="btn btn-success">
  <a href="{{route('category.form')}}" style="color:aliceblue; text-decoration:none">Add Category</a>
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($categories as $key=>$item)
   <tr>
      <th scope="row">{{$item->$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->status}}</td>
      <td>
        <a href="{{route('category.edit',$item->id)}}" class="btn btn-success">Edit</a>
        <a href="{{route('category.delete',$item->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
   @endforeach
    
  </tbody>
</table>
</div>

@endsection