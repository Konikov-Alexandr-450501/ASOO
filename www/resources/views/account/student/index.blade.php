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
                            <a href="" class="btn btn-default">New Order</a>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 15px;">
                        <div class="row">
                            <div class="panel panel-default" id="orders-panel">
                                @include('partials.orders.index')
                            </div>
                        </div>
                        <div class="row" style="text-align: center">
                            <button class="btn btn-default"style="display: inline-block">Show More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
