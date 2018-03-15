@extends('app')

@section('content')
<section class="cover text-center">
    <div class="container">
        <div class="col-md-12">
            <h1>401 error</h1>
        </div>
        <div class="col-md-12 alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span style="font-size: 1.2em;">Oops! Requires authorization.</span>
        </div>
    </div>
</section>
@endsection
