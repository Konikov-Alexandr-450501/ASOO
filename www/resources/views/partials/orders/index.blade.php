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
                <td>#@{{ order.id }}</td>
                <td>@{{ order.description }}</td>
                <td>
                    <div v-if="order.type_id == 1">Sheet</div>
                    <div v-else>Reference</div>
                </td>
                <td>@{{ order.created_at }}</td>
                <td>@{{ order.status }}</td>
                <td><button class=""><i class="fa fa-trash" aria-hidden="true"></i></button></td>
            </tr>
        </tbody>
     </table>
</template>

<orders-comp></orders-comp>