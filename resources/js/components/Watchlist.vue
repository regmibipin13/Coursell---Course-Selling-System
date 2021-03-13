<template>
    <a href="#" @click.prevent="addWatchlist" class="btn btn-lg btn-secondary btn-block">Watch Later</a>
</template>

<script>
export default {
    props:['course_id'],
    data: function() {
        return {

        };
    },
    methods: {
        addWatchlist: function()
        {
            axios.post('/watchlists',{
                course_id:this.course_id,
            }).then((response) => {

            })
        }
    }
}
</script>
