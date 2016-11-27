<template id="order-list">
    <div class="col-md-12" style="margin-top: 15px;">
        <div class="row">
            <div class="panel panel-default" id="orders-panel">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Description</th>
                        <th>Type <i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Created at <i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Status <i class="fa fa-sort" aria-hidden="true"></i></th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <td v-if="list.length == 0">Haven't any orders</td>
                    <tr v-else v-for="order in list">
                        @include('partials.orders.show')
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row" style="text-align: center" v-if="list.length != 0">
            <button class="btn btn-default" @click="showMore()" style="display: inline-block">Show More</button>
        </div>
    </div>
</template>

<orders-comp></orders-comp>