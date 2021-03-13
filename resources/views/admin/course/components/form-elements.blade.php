<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.course.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.course.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.course.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('total_duration'), 'has-success': fields.total_duration && fields.total_duration.valid }">
    <label for="total_duration" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.course.columns.total_duration') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.total_duration" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('total_duration'), 'form-control-success': fields.total_duration && fields.total_duration.valid}" id="total_duration" name="total_duration" placeholder="{{ trans('admin.course.columns.total_duration') }}">
        <div v-if="errors.has('total_duration')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('total_duration') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('categories'), 'has-success': fields.categories && fields.categories.valid }">
    <label for="categories" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.course.columns.categories') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <multiselect v-model="form.categories" tag-placeholder="Add this as new category" placeholder="Search or add a category" label="name" track-by="id" :options="{{ $categories->toJson() }}" :multiple="true" :taggable="true"></multiselect>
        <div v-if="errors.has('categories')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('categories') }}</div>
    </div>
</div>
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('suscriptions'), 'has-success': fields.suscriptions && fields.suscriptions.valid }">
    <label for="suscriptions" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.course.columns.suscriptions') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <multiselect v-model="form.suscriptions" tag-placeholder="Add this as new category" placeholder="Search or add a suscripions" label="name" track-by="id" :options="{{ $suscriptions->toJson() }}" :multiple="true"></multiselect>
        <div v-if="errors.has('suscriptions')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('suscriptions') }}</div>
    </div>
</div>




