@extends('app')

@section('content')
<section class="text-center">

    <div class="container">

        <form action="{{ route('admin.products.store') }}" method="POST">
            {{ csrf_field() }}

            <div class="col-md-12">
                <h1>Create Product</h1>
            </div>

            @include('admin.products._form', ['product' => $product])

            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-block" name="create"
                        value="Create" id="btnCreate" />
                </div>
            </div>
        </form>

    </div>

</section>
@stop
