import AppForm from '../app-components/Form/AppForm';

Vue.component('user-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                email:  '' ,
                email_verified_at:  '' ,
                password:  '' ,
                suscription_id:  '' ,
                trail_ends_at:  '' ,
                ends_at:  '' ,
                started_at:  '' ,
                
            }
        }
    }

});