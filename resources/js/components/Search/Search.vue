<template>
    <div class="row">
        <filters ref="filters"></filters>
        <courses ref="courses"></courses>
    </div>
</template>

<script>
import Courses from './Courses.vue';
import Filters from './Filters.vue';
export default {
    name:"Search",
    components: {
        Courses,
        Filters,
    },
    watch:{
        selected:{
            handler: function() {
                this.$refs.courses.loadCourses();
            },
            deep:true,
        }
    },
    data: function() {  
        return {
            selected:{
                categories:[],
                suscriptions:'Free',
                search:'',
            }
        };
    },
    methods: {
        checkIfSearchParamExists: function() {
            var queryString = window.location.search;
            var urlParams = new URLSearchParams(queryString);
            if(urlParams.has('search')) {
                this.selected.search = urlParams.get('search');
            } else {
                this.$refs.courses.loadCourses();
            }
        },
    },
    mounted() {
        this.checkIfSearchParamExists();
    }


}
</script>