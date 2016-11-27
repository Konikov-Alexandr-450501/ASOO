<template id="order-list">
    <div class="col-md-12" style="margin-top: 15px;">
        <div class="row">
            <div class="panel col-lg-12" id="orders-panel">
                <form method="POST" @submit.prevent="createOrder()">
                    <div class="form-group">
                        <label for="order_kind">Order:</label>
                        <select class="form-control" v-model="newOrder.kind" @change="changeOrderTypes()" name="order_kind">
                            @foreach($kinds as $kind)
                                <option value="{{ $kind->id }}">{{ $kind->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" >
                        <label for="order_type">Select type: </label>
                        <select class="form-control" v-if="isSheet()" v-model="newOrder.type" name="order_type">
                            @foreach($sheet_types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <select class="form-control" v-else v-model="newOrder.type" name="order_type">
                            @foreach($reference_types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" v-if="isSheet()">
                        <label for="order_to_place">Where: </label>
                        <select class="form-control" @change="changePlaceStatus()" v-model="newOrder.place_id" name="order_to_place">
                        @foreach($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                            <option value="505">etc</option>
                        </select>
                        <div class="form-group" v-if="haventPlace">
                            <br>
                            <textarea class="form-control" placeholder="Enter the text" v-model="newOrder.place_text" name="order_to_place_text" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                    @include('account.student.orders.create_reference')
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>
<orders-comp></orders-comp>