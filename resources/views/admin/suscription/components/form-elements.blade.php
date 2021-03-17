<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.suscription.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.suscription.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('features'), 'has-success': fields.features && fields.features.valid }">
    <label for="features" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.suscription.columns.features') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.features" v-validate="'required'" id="features" name="features"></textarea>
        </div>
        <div v-if="errors.has('features')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('features') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': fields.price && fields.price.valid }">
    <label for="price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.suscription.columns.price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price'), 'form-control-success': fields.price && fields.price.valid}" id="price" name="price" placeholder="{{ trans('admin.suscription.columns.price') }}">
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">
    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.suscription.columns.type') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <select v-model="form.type" id="type" class="form-control">
            <option value="month">Month</option>
            <option value="day">Day</option>
            <option value="week">Week</option>
            <option value="year">Year</option>
        </select>
        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('stripe_id'), 'has-success': fields.stripe_id && fields.stripe_id.valid }">
    <label for="stripe_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.suscription.columns.stripe_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.stripe_id" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('stripe_id'), 'form-control-success': fields.stripe_id && fields.stripe_id.valid}" id="stripe_id" name="stripe_id" placeholder="{{ trans('admin.suscription.columns.stripe_id') }}">
        <div v-if="errors.has('stripe_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('stripe_id') }}</div>
    </div>
</div>


