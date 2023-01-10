<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Education extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['titre','description','image','prix','type_education_id'];
    public function registerHediaCollections(): void
    {
        $this
        ->addtediaCoLtection("courses")
        ->singleFile();
    }
    public function typeeducation()
    {
        return $this->belongsTo(TypeEducation::class,'type_education_id');
    }

    public function paragraph()
    {
        return $this->hasMany(Paragraphe::class,'paragraphes_id');
    }
}
