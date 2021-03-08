import AppForm from '../app-components/Form/AppForm';

Vue.component('user-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                email:  '' ,
                email_verified_at:  '' ,
                name:  '' ,
                password:  '' ,
                
            }
        }
    }

});