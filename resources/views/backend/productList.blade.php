@extends('backend.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>
       
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">
           <a href="{{route('product.form')}}">
           <button class="btn btn-info">Add Product</button>
           </a>
        </h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Category Name</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>
       
</body>
       
<script type="text/javascript">
  $(function () {
        
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('product.list') }}",
        columns: [
            {data: 'id', name: 'Id'},
            {data: 'name', name: 'Name'},
            {data: 'description', name: 'Description'},
            {data: 'price', name: 'Price'},
            {data: 'stock_quantity', name: 'Stock'},
            {data: 'category_id', name: 'Category Name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        
  });
</script>
</html>

    
@endsection