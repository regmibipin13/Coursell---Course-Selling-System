<template>
    <div class="col-md-9">
        <div class="row">
            <div class="col-md-12 p-0 mb-2 search-bar-filter">
                <input type="search" v-model="$parent.selected.search" value="" class="form-control main-search-bar filter-search-bar" placeholder="Enter the name of course , blog title , tutorials or author">
            </div>
            <div class="col-md-12 mb-4 p-4 course-card-filters" v-for="(course , index) in courses" :key="index">
                <h5 class="course-title pt-2 pb-2"><a :href="'/course/'+course.id">{{ course.name }} </a></h5>
                <div class="course-components d-flex align-items-center mb-3">
                    <div class="time">
                        <i class="fa fa-clock text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">{{ course.total_duration }}</span>
                    </div>
                    &nbsp; &nbsp; &nbsp;
                    <div class="date">
                        <i class="fas fa-calendar-week text-secondary"></i>&nbsp;<span class="text-secondary font-weight-bold">{{ course.released_time }}</span>
                    </div>
                    &nbsp; &nbsp; &nbsp;
                </div>
                <div class="course-category pt-3 pb-3">
                    <a href="" v-for="(category, key) in course.categories" :key="key">{{ category.name }}</a>
                    
                </div>
            </div>
            <div class="pagination mt-5 mb-5">
                <pagination :data="courseData" @pagination-change-page="loadCourses"></pagination>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data:function() {
        return {
            courses:[],
            courseData:{},
        };
    },
    methods:{
        loadCourses: function(page = 1) {
            axios.get('/api/courses',{
                params:{
                    categories:this.$parent.selected.categories,
                    suscriptions:this.$parent.selected.suscriptions,
                    search:this.$parent.selected.search,
                    page:page,
                }
            }).then((response) => {
                this.courseData = response.data;
                this.courses = response.data.data;
            }).catch((error) => {
                console.log(error);
            })
        },

    },
}
</script>