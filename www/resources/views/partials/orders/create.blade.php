<template id="order-list">
    <div class="col-md-12" style="margin-top: 15px;">
        <div class="row">
            <div class="panel col-lg-12" id="orders-panel">
                <div class="form-group">
                    <label for="order_kind">Order:</label>
                    <select class="form-control" v-model="newOrder.kind" name="order_kind">
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
                <div class="form-group">
                    <label for="order_to_place">Where: </label>
                    <select class="form-control" @change="changePlaceStatus()" v-model="newOrder.place_id" name="order_to_place">
                        @foreach($places as $place)
                            <option value="{{ $place->id }}">{{ $place->name }}</option>
                        @endforeach
                            <option value="505">etc</option>
                    </select>
                    <br>
                    <textarea class="form-control" placeholder="Enter the text" v-if="haventPlace" v-model="place_text" name="order_to_place" id="" cols="30" rows="10"></textarea>
                </div>
            </div>

        </div>
    </div>
</template>
<orders-comp></orders-comp>