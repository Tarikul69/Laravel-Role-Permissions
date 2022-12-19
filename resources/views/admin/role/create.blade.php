@extends('layouts.app')

@section('content')
<div class="container">
<script src="sweetalert2.all.min.js"></script>

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
                            <td><a href="/role" class="btn btn-secondary" style="text-decoration:none;">Role Index</a></td>
                         </div>
                     </div>
                     <form method="POST" action="/store" >
                         @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Post Name</label>
                            <input type="text" class="form-control" name="name" placeholder="post name">
                            <br>
                         </div>
                         @error('name')<span class="error" style="color: red;">{{$message}}</span>@enderror <br>
                         
                         
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <script>
                            Swal.fire("New Role created Successfuly")

                        </script>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
