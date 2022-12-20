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
                 </div>
            </div>
            <div class="container">
            <form>
                @csrf
                 <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control"  name="name" placeholder="Add product name">
                 </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control"  name="peice" placeholder="Add product Price">
                 </div>
                 
                 <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
