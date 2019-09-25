@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
<form action="{{ route('order.store') }}" method="post">
    @csrf
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><input type="text" name="name" class="form-control" placeholder="Product Name"></th>
                <th scope="row"><input type="number" name="price" class="form-control" placeholder="Price"></th>
            </tr>
            <tr>
                <th scope="row"><input type="text" name="name" class="form-control" placeholder="Product Name"></th>
                <th scope="row"><input type="number" name="price" class="form-control" placeholder="Price"></th>
            </tr>
            <tr>
                <th scope="row"><input type="text" name="name" class="form-control" placeholder="Product Name"></th>
                <th scope="row"><input type="number" name="price" class="form-control" placeholder="Price"></th>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-primary" type="submit">Submit</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
