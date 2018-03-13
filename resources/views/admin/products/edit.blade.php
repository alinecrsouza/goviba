@extends('app')

@section('content')
<section class="cover text-center">

    <div class="container">

        <form action="{{ route('products.update', ['id' => $product->id])}}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="col-md-12">
                <h1>Edit Product</h1>
            </div>

            @include('admin.products._form', ['product' => $product])

            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-block" name="update"
                        value="Update" id="btnUpdate" />
                </div>
            </div>

        </form>

    </div>

</section>
@stop
