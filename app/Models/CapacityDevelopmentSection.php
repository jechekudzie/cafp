<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapacityDevelopmentSection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function capacity_development()
    {
        return $this->belongsTo(CapacityDevelopment::class);
    }
}
