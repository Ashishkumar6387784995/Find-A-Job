<?php

namespace App\Models\web;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\TranslationTrait;
use App\Models\Translations;

class webs extends Model implements  HasMedia
{
    //
       use InteractsWithMedia,HasFactory,SoftDeletes;
    use TranslationTrait;
    protected $table = 'webs';
    protected $fillable = [
        'name','description', 'category_id', 'web_link', 'status' ,'is_featured',
    ];


    public function translations()
    {
        return $this->morphMany(Translations::class, 'translatable');
    }

    public function translate($attribute, $locale = null)
    {
        $locale = $locale ?? app()->getLocale() ?? 'en';

        if ($locale !== 'en') {
            $translation = $this->translations()
                ->where('attribute', $attribute)
                ->where('locale', $locale)
                ->value('value');

            return $translation !== null ? $translation : '';
        }
        return $this->$attribute;
    }
}
