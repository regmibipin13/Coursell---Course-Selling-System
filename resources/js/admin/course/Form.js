import axios from 'axios';
import AppForm from '../app-components/Form/AppForm';

Vue.component('course-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                description:  '' ,
                name:  '' ,
                total_duration:  '' ,
                categories:[],
                
            }
        }
    },

});