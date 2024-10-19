<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;

class Agency extends Model
{
    use HasFactory;

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }
    public function schedule(): Attribute
    {
        return Attribute::make(
            get: fn($value) => json_decode($value),
            set: fn($value) => json_encode($value),
        );
    }
    public function url()
    {
        return route(
            'agency',
            [
                'slug' => Str::slug($this->name()),
                'agency' => $this
            ]
        );
    }
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    public function propertiesListedFor($type)
    {
        return $this->properties()->where('listed_for', $type)->get();
    }
}
