@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Order</div>
                    <div class="panel-body">
                        @include('partials.orders.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
