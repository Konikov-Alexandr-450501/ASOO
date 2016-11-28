<div class="form-group" v-if="!isSheet()">
    <div class="form-group">
        <label for="order_teacher">Teacher: </label>
        <select class="form-control" v-model="newOrder.teacher_id" name="order_teacher">
            @foreach($places as $place)
                <option :value="{{ $place->id }}">{{ $place->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="gap_date">Gap date: </label>
        <div class="input-group date">
            <input class="datepicker form-control" name="gap_date" data-date-format="mm/dd/yyyy">
            <div class="input-group-addon">
                <i class="fa fa-th" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="order_reason">Gap reason: </label>
        <label class="radio-inline">
            <input type="radio" :value="true" name="order_reason_justifiable" v-model="newOrder.justifiable">justifiable
        </label>
        <label class="radio-inline">
            <input type="radio" :value="false" name="order_reason_justifiable" v-model="newOrder.justifiable" checked>not justifiable
        </label>
        <div class="form-group" v-if="newOrder.justifiable">
            <div class="panel panel-primary">
                <div class="panel-heading">Reason</div>
                <div class="panel-body">
                    <div class="form-group">
                        <select class="form-control" v-model="newOrder.reason_id" @change="changeReasonStatus()" name="order_reason">
                            @foreach($places as $place)
                                <option :value="{{ $place->id }}">{{ $place->name }}</option>
                            @endforeach
                            <option :value="505">etc</option>
                        </select>
                        <div class="form-group" v-if="haventReason">
                            <br>
                            <input class="form-control" placeholder="Enter the reason" v-model="newOrder.reason_text" name="order_reason_text" cols="30" rows="10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" v-model="checkbox_rules">I am aware of the internal rules.</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" v-model="checkbox_correct_data">I confirm that these data are correct.</label>
        </div>
    </div>
</div>