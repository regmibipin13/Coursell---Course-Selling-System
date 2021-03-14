import AppForm from '../app-components/Form/AppForm';

Vue.component('episode-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                course_id:  '' ,
                description:  '' ,
                duration:  '' ,
                title:  '' ,
                course:'',
                
            },
            mediaCollections:['episode'],
        }
    },
    methods: {
        select(course) {
            this.form.course_id = course.id;
        }
    }

});