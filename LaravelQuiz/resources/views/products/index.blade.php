@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Description</th>
            <th scope="col">Price</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
<tbody>
    @foreach ($products as $products)
        <tr>
            <th scope="row">{{$products->id}}</th>
            <td>{{$products->product_name}}</td>
            <td>{{$products->product_description}}</td>
            <td>{{$products->price}}</td>
            <td>{{$products->status}}</td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection