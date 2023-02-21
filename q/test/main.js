const app = Vue.createApp({
    data: function(){ //equal to data()
        return {
            cart: [],
            premium: false
        }
    },
    methods: {
        updateCart(id){
            this.cart.push(id)
        },
        removeItemFromCart(id){
            const index = this.cart.indexOf(id)
            if (index > -1) {
                this.cart.splice(index, 1)
            }
        }
    }
})