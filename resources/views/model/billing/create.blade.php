@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-body">
                        @if (count($modelbillinginfo) === 1)
                        <h3>Your Billing information</h3>
                        @else
                        <h3>Sorry!</h3>
                        <p>You are yet to provide your billing information. Please create it here.</p>
                        <a href = "modelbillinginfo/create" class = "btn btn-sm btn-primary text-uppercase">Update billing information</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection