app.component('product-display',{
    props: {
        premium:{
            type: Boolean,
            required: true
        }
    },
    template:
    /*html*/
        `<div>
        <h1>{{ title }}</h1>
<img v-bind:src="image" >
    <p v-if="inStock != 0">In stock</p>
    <p v-else>Out of stock</p>
    <p v-show="onSale">On sale</p>
    <p>Shipping: {{ shipping }}</p>
    <div>
        <ul>
            <li v-for="detail in details">{{ detail }}</li>
        </ul>
    </div>
    <div
        v-for="(variant, index) in variants"
    :key="variant.id"
    @mouseover="updateVariant(index)"
    class="color-circle"
    :style="{ backgroundColor: variant.color}">
</div>
<button v-on:click="addToCart" :disabled="inStock == 0">Add to cart</button>
<button v-on:click="removeFromCart">Delete from cart</button>
    <review-list v-if="reviews.length" :reviews="reviews"></review-list>
    <review-form @review-submitted="addReview"></review-form>
</div>`,
data: function(){ //equal to data()
    return {
        product: 'Socks',
        brand: 'aboba',
        selectedVariant: 0,
        onSale: false,
        details:['50% cotton', '30% wool', '20% polyester'],
        variants: [
            {id: 1, color: 'green', image: './assets/images/pic1.jpg', quantity: '10'},
            {id: 2, color: 'blue', image: './assets/images/pic2.jpg', quantity: '5'},
        ],
        reviews: []
    }
},
methods: {
    updateVariant(index){
        this.selectedVariant = index
    },
    addToCart(){
        this.$emit('add-to-cart', this.variants[this.selectedVariant].id)
    },
    removeFromCart(){
        this.$emit('remove-from-cart', this.variants[this.selectedVariant].id)
    },
    addReview(review){
        this.reviews.push(review)
    }
},
computed: {
    title(){
        return this.brand + ' ' + this.product
    },
    image(){
        return this.variants[this.selectedVariant].image
    },
    inStock() {
        return this.variants[this.selectedVariant].quantity
    },
    shipping(){
        if(this.premium){
            return 'Free'
        }
        return 2.99
    }
}

})