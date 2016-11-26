<template id="order-list">
    <div class="col-md-12" style="margin-top: 15px;">
        <div class="row">
            <div class="panel panel-default" id="orders-panel">
                <div class="form-group">
                    <label for="order_kind">Order: </label>
                    <select name="order_kind">
                        @foreach($order_kinds as $kind)
                            <option value="{{ $kind->id }}">{{ $kind->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_type">Select type: </label>
                    <select name="order_type">
                        @foreach($order_types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="order_to_place">Where: </label>
                    <select name="order_to_place">
                        @foreach($order_to_place as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                    </select>
                    <textarea name="order_to_place" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
</template>
<orders-comp></orders-comp>