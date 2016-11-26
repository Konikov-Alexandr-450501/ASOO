@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Orders</div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row">
                            <a href="{{ route('orders.create') }}" class="btn btn-default">New Order</a>
                        </div>
                    </div>
                    @include('partials.orders.index')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
