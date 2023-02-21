app.component('product-display', {
    template:
    /*html*/
    `<h1>{{ title }}</h1>
    <img :src="image" alt="product-picture">
    <p>No rating</p>
    <p>{{ price }}</p>
    <p>{{ dimensions }}</p>
    <p>{{ description }}</p>
    <p>{{ characteristics}} </p>`,
    data() {
        return {
            product: 'Figure',
            brand: 'No brand',
            selectedVariant: 0,
            dimensions: [30, 50, 80],
            characteristics:['50% wood', '30% plastic', '20% polyester'],
            variants: [
                {id: 1, color: 'green', image: './assets/img/1.jpg', quantity: '10', price: 2.99},
                {id: 2, color: 'blue', image: './assets/img/1.jpg', quantity: '5', price: 2.05},
            ],
            reviews: []
        }
    },
computed: {
    title(){
        if(this.brand !== 'No brand'){
            return this.brand + ' ' + this.product
        }else{
            return this.product
        }
    },

    image(){
        return this.variants[this.selectedVariant].image
    },
    price(){
        return this.variants[this.selectedVariant].price
    }
    },
})