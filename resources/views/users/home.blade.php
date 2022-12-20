@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Nextive') }}</h2></div>

                <div class="card-body">
                     <h2>View Products</h2>
                </div>
            </div>
            <div class="container">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
       
    </tr>
  </thead>
  <tbody>
      @foreach($data as $r)
    <tr>
      <th scope="row">{{$r->id}}</th>
      <td>{{$r->name}}</td>
      <td>{{$r->price}}</td>
      <td>
           
    </tr>
    @endforeach
  </tbody>
</table>
            </div>
        </div>
    </div>
</div>
@endsection
