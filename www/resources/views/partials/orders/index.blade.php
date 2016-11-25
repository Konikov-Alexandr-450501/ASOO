<template id="order-list">
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
            <tr v-for="order in list">
                @include('partials.orders.show')
            </tr>
        </tbody>
     </table>
</template>

<orders-comp></orders-comp>