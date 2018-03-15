@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <strong>ID</strong>
        </div>
        <div class="col-md-6">
            <strong>Name</strong>
        </div>
        <div class="col-md-3">
            <strong>Price</strong>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            {{ $product->id }}
        </div>
        <div class="col-md-6">
            {{ $product->name }}
        </div>
        <div class="col-md-3">
            {{ $product->price }}
        </div>
    </div>
</div>
@stop
