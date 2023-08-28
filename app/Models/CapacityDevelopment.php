<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapacityDevelopment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function capacity_development_sections()
    {
        return $this->hasMany(CapacityDevelopmentSection::class);
    }

    public function add_capacity_development_sections($section)
    {
        return $this->capacity_development_sections()->create($section);
    }

}
