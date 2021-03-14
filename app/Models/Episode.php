<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia;

class Episode extends Model implements HasMedia
{
    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;

    public function registerMediaCollections(): void 
    {
        $this->addMediaCollection('episode')->maxFilesize(500*1024*1024);
    }

    protected $fillable = [
        'course_id',
        'description',
        'duration',
        'title',
    
    ];
    
    
    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url','slug'];

    public function playingNow($episode)
    {
        
    }
    public function getSlugAttribute()
    {
        return url('/course/'.$this->course_id.'/episode/'.$this->getKey());
    }
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function getResourceUrlAttribute()
    {
        return url('/admin/episodes/'.$this->getKey());
    }
}
