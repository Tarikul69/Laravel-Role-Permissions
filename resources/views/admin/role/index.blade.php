@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Nextive') }}</h2></div>

                <div class="card-body">
                      
                     <div class="container row">
                         <div class="container col">
                            <h2>Admin Role</h2>
                         </div>
                         <div class="container col">
                            <td><a href="" class="btn btn-secondary" style="text-decoration:none;">New Role</a></td>
                         </div>
                     </div>
                     <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Role</th>
       
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($roles as $r)
    <tr>
      <th scope="row"></th>
      <td>{{$r->name}}</td>
       <td>
          <a href="" class="btn btn-success " style="text-decoration:none;">Edit</a>
          <a href="" class="btn btn-danger" style="text-decoration:none;">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
