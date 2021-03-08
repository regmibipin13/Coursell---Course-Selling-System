import AppForm from '../app-components/Form/AppForm';

Vue.component('suscription-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                features:  '' ,
                name:  '' ,
                price:  '' ,
                
            }
        }
    }

});