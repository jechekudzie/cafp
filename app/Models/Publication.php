<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function publication_category()
    {
        return $this->belongsTo(PublicationCategory::class);
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()
                ->orWhere('title', 'like', '%' . $search . '%')
                ->orWhere('sub_title', 'like', '%' . $search . '%')
                ->orWhere('authors', 'like', '%' . $search . '%')
                ->orWhereDoesntHave('publication_category')->orWhereHas('publication_category', function ($query) use ($search) {
                    $query->where('name', 'like', '%' . $search . '%');
                });
    }

    public function scopeCategory($query, $publication_category)
    {
        if ($publication_category != null) {
            return $query->whereHas('publication_category', function ($query) use ($publication_category) {
                $query
                    ->where('publication_category_id', '=', $publication_category);
            });
        }

        return $query;

    }


}
