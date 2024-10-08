@extends('layout')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="create"> Create New Product</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>price</th>
            <th>Image</th>
            <th>description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="/images/{{ $product->image }}" width="100px"></td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="#" method="POST">
     
                    <a class="btn btn-info" href="#">Show</a>
      
                    <a class="btn btn-primary" href="#">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $products->links() !!}
        
@endsection