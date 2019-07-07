<template>
    <div class="row ml-1">
        <star-rating 
            v-model="rating" 
            :increment="0.5" 
            text-class="custom-text"
            v-bind:star-size="40"
            >
        </star-rating>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                rating: 0
            }
        },

        methods: {
            setRating() {
                var pathArray = location.pathname.split('/');
                var uid = pathArray[2];
                
                 fetch('/api/rating/new',{
                     method: 'post',
                     body: JSON.stringify({shop:uid, user:'1', rating:this.rating}),
                     headers: {
                         'content-type' : 'application/json'
                     },
                 }).then(res => res.json())
                 .then(data => {
                     swal('Success', 'Uspesno ste ocenili', 'success');
                 }).catch( err => {
                     swal('Failed', 'something went wrong', 'error');
                 })
            }, 
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
