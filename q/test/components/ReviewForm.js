app.component('review-form',{
    template:
    /*html*/
    `<form @submit.prevent="onSubmit">
        <h2>Leave a review</h2>
        <div>
            <label for="username">Your name</label>
            <input type="text" id="username" v-model="name">
        </div>
        <div>
            <label for="review">Enter your review</label>
            <input type="textarea" id="review" v-model="review">
        </div>
        <div>
        <label for="rating">Rating</label>
            <select name="" id="rating" v-model.number="rating">
                <option value="">5</option>
                <option value="">4</option>
                <option value="">3</option>
                <option value="">2</option>
                <option value="">1</option>
            </select>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>`,
    data() {
        return {
            name: '',
            review: '',
            rating: null
        }
    },
    methods: {
        onSubmit(){
            if(this.name === '' || this.review === '' || this.rating === null){
                alert('fill out every field')
                return
            }
            let productReview = {
                name: this.name,
                review: this.review,
                rating: this.rating
            }
            this.$emit('review-submitted', productReview)
            this.name = ''
            this.review = ''
            this.rating = null
        }
    }
})