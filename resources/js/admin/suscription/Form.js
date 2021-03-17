import AppForm from '../app-components/Form/AppForm';

Vue.component('suscription-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                features:  '' ,
                price:  '' ,
                type:  'month' ,
                stripe_id:  '' ,
                
            }
        }
    }

});