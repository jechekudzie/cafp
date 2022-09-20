<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function event_documents(){
        return $this->hasMany(EventDocument::class);
    }

    public function event_images(){
        return $this->hasMany(EventImage::class);
    }
    public function addDocuments($event_file){
      return $this->event_documents()->create($event_file);
    }
    public function addImages($event_file){
        return $this->event_images()->create($event_file);
    }


}
