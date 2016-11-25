<td>#@{{ order.id }}</td>
<td>@{{ order.description }}</td>
<td>
    <div v-if="order.type_id == 1">Sheet</div>
    <div v-else>Reference</div>
</td>
<td>@{{ order.created_at }}</td>
<td>@{{ order.status }}</td>
<td>
    <button type="submit" @click="deleteOrder(order)">
        <i class="fa fa-trash" aria-hidden="true"></i>
    </button>
</td>