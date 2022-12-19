@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Nextive') }}</h2></div>

                <div class="card-body" style="align-items:center;">
                    <a class="btn btn-secondary" href="/role">Role</a><br>
                    <hr>
                    <a class="btn btn-secondary" href="/products">View Products</a><br>
                    <hr>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
