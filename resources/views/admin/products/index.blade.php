@extends('app')

@section('content')
<div class="container">
    <h1>Products</h1>
    <a href="{{ route('admin.products.create')}}" class="btn btn-default">New product</a>
    <br><br>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <div class="pull-left">
                    <a href="{{ route('admin.products.edit', ['id' => $product->id])}}" class="btn btn-primary" role="button">Edit</a>
                </div>
                <div class="pull-left">
                    &nbsp;
                </div>
                <div class="pull-left">
                    <form action="{{ route('admin.products.destroy', ['id' => $product->id])}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <!--a href="{{-- route('products.destroy', ['id' => $product->id])--}}">Delete</a-->
                </div>

            </td>
        </tr>
        @endforeach
    </table>
    {!! $products -> render() !!}
</div>
@stop
