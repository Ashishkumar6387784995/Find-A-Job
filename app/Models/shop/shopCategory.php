<?php

namespace App\Models\shop;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;
use App\Traits\TranslationTrait;
use App\Models\Translations;

class shopCategory extends Model implements HasMedia
{
    use HasFactory, HasRoles, InteractsWithMedia, SoftDeletes, TranslationTrait;

    protected $table = 'shop_category';

    protected $fillable = [
        'id',
        'created_by',
        'name',
        'description',
        'color',
        'status',
        'is_featured',
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
