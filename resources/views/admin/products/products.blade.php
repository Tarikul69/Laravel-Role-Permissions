@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Nextive') }}</h2></div>

                <div class="card-body row">
                  <div class="container col">
                    <h2>View Products</h2>
                  </div>
                  <div class="container col">
                    <a href="/addproduct" class="btn btn-secondary">Add Product</a>
                  </div>
                 </div>
            </div>
            <div class="container">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td>
          <a href="" class="btn btn-primary">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection
