<div class="form-group row align-items-center" :class="{'has-danger': errors.has('course_id'), 'has-success': fields.course_id && fields.course_id.valid }">
    <label for="course_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.episode.columns.course_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.course_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('course_id'), 'form-control-success': fields.course_id && fields.course_id.valid}" id="course_id" name="course_id" placeholder="{{ trans('admin.episode.columns.course_id') }}">
        <div v-if="errors.has('course_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('course_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.episode.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('duration'), 'has-success': fields.duration && fields.duration.valid }">
    <label for="duration" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.episode.columns.duration') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.duration" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('duration'), 'form-control-success': fields.duration && fields.duration.valid}" id="duration" name="duration" placeholder="{{ trans('admin.episode.columns.duration') }}">
        <div v-if="errors.has('duration')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('duration') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.episode.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.episode.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>


