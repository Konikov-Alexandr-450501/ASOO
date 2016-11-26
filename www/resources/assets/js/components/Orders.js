Vue.component('orders-comp', {
    template: '#order-list',

    data: {
        list: [],
        count: 0
    },

    data: function () {
        return {
            list: [],
        };
    },

    created: function () {
        this.getOrders();
    },

    methods: {

        /**
         * Set count of retrieved data.
         *
         * @param count
         */
        setCount: function(count){
            this.count = count;
        },

        /**
         * Get orders from storage.
         */
        getOrders: function () {
            this.$http.get('/orders').then((orders) => {
                this.list = orders.data;
                this.setCount(this.list.length);
            });
        },

        /**
         * Delete order from storage.
         *
         * @param order
         */
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
        },

        /**
         * Show more orders by step = 5.
         */
        showMore: function () {
            var step = 5;
            var count = this.count + step;

            this.$http.get('/orders/' + count).then((orders) => {
                this.list = orders.data;
                this.setCount(this.list.length);
            });
        },


    },
});
