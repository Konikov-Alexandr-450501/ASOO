Vue.component('orders-comp', {
    template: '#order-list',

    data: function () {
        return {
            list: [],
            count: 0,
            haventPlace: false,
            currentRoute: '',
            newOrder: {
                kind: 1,
                type: 1,
                place_id: 1,
                place_text: '',
            }
        }
    },

    created: function () {
        this.currentRoute = window.location.pathname;

        if(!this.isCreatePage()) {
            this.getOrders();
        }
    },

    methods: {

        /**
         * Change haven't place status.
         */
        changePlaceStatus: function() {
            this.haventPlace =
                (this.newOrder.place_id == 505) ? true : false;
        },

        /**
         * Chech if the order kind is for sheet.
         *
         * @returns {boolean}
         */
        isSheet: function () {
            return (this.newOrder.kind == 1);
        },

        /**
         * Check if the current page is to create an order.
         *
         * @returns {boolean}
         */
        isCreatePage: function() {
            return ("/account/orders/create" === this.currentRoute);
        },

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
            this.$http.delete('account/orders/' + order.id)
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
