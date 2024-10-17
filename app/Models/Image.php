<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getUrl()
    {
        if ($this->internal) {
            return Storage::url($this->path);
        } else {
            return $this->path;
        }
    }
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
