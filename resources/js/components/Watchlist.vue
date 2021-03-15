<template>
    <a href="#" @click.prevent="addWatchlist" class="btn btn-lg btn-secondary btn-block">Watch Later</a>
</template>

<script>
export default {
    props:['course'],
    data: function() {
        return {

        };
    },
    methods: {
        addWatchlist: function()
        {
            axios.post('/watchlists',{
                course_id:this.course.id,
            }).then((response) => {
                if(response.data.type == 'success') {
                    Vue.$toast.success(response.data.message);
                } else {
                    Vue.$toast.error(response.data.message);
                }
            }).catch((error) => {
                Vue.$toast.error('Something went wrong . Please try again later');
            });
        }
    }
}
</script>
