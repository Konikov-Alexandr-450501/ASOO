Vue.component('orders-comp', {
    template: '#order-list',

    data: {
        list: [],
    },

    data: function () {
        return {
            list: []
        };
    },

    created: function () {
        this.getOrders();
    },

    methods: {
        /**
         * Get orders from storage.
         */
        getOrders: function () {
            this.$http.get('/orders').then((orders) => {
                console.log(orders);
                this.list = orders.data;
                console.log(this.list);
            });
        },


        deleteOrder: function (order) {
            this.$http.delete('orders/' + order.id)
                .then((data) => {
                    // success callback
                    var response = JSON.parse(data.body);
                    console.log(response);
                    if(response.success) {
                        this.list.$remove(order);
                        alert(response.messages[0]);
                    }
                }, (data) => {
                    // error callback
                    var response = JSON.parse(data.body);
                    console.log(response);
                    alert(response.messages[0]);
                });
        }

    },
});
