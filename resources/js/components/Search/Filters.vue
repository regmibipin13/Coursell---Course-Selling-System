<template>
    <div class="col-md-3 filter-lists">
        <div class="filter-content mb-3">
            <h6 class="text-secondary pt-3 pb-3">Categories</h6>
            <div class="card-body p-0">
                <div class="custom-control custom-checkbox" v-for="(category, index) in categories" :key="index">
                    <span class="float-right badge badge-light round">{{ category.courses_count }}</span>
                    <input type="checkbox" class="custom-control-input" :id="index" v-model="$parent.selected.categories" :value="category.name">
                    <label class="custom-control-label" :for="index">{{ category.name }}</label>
                </div>
            </div>
        </div>
        <div class="filter-content mb-3">
            <h6 class="text-secondary pt-3 pb-3">Suscriptions</h6>
            <div class="card-body p-0">
                <label class="form-check" v-for="(suscription , index) in suscriptions" :key="index">
                    <input class="form-check-input" type="radio" v-model="$parent.selected.suscriptions" :value="suscription.name">
                    <span class="form-check-label">
                        {{ suscription.name }}
                    </span>
                </label>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data:function() {
        return {
            categories:[],
            suscriptions:[],
        };
    },
    methods : {
        loadCategories: function() {
            axios.get('/api/categories').then((response) => {
                this.categories = response.data;
            }).catch((error) => {
                console.log(error);
            })
        },
        loadSuscriptions: function() {
            axios.get('/api/suscriptions').then((response) => {
                this.suscriptions = response.data;
            }).catch((error) => {
                console.log(error);
            })
        }
    },
    mounted() {
        this.loadCategories();
        this.loadSuscriptions();
    }
}
</script>