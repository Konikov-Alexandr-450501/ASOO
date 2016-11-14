Vue.http.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;

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
        getOrders: function () {
            this.$http.get('/orders').then((orders) => {
                console.log(orders);
                this.list = orders.data;
                console.log(this.list);
            });
        },
    },
});

new Vue({
    el: '#orders-panel'
});