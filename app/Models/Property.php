<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'sell_entry_date' => 'datetime',
        'rent_entry_date' => 'datetime',
    ];
    public function country(): Attribute
    {
        return Attribute::make(
            get: fn() =>  'Israél'
        );
    }

    public function url(){
        return route(
            'property',
            [
                'slug' => Str::slug($this->name()),
                'property' => $this
            ]
            );
    }
    public function name()
    {
        return $this->type->display_name . ' - ' .
            $this->street . ' .';
    }
    public function entry_date()
    {
        if ($this->listed_for == 'sell') {
            return $this->sell_entry_date->format('d/m/Y');
        } else {
            return $this->rent_entry_date->format('d/m/Y');
        }
    }

    public function fullAddress()
    {
        return  $this->street . ', ' . $this->area . ', ' . $this->country;
    }
    public function totalSurfaceArea()
    {
        return $this->total_surface . ' m²';
    }

    public function totalRooms()
    {
        return $this->rooms_count . ' rooms';
    }

    public function totalParkings()
    {
        return $this->carpark_count . ' parkings';
    }
    public function price()
    {
        return number_format($this->price, thousands_separator: ' ')  . ' ₪';
    }

 

    public function agent()
    {
        return $this->agency->agent();
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
    public function condition()
    {
        return $this->belongsTo(Condition::class, 'condition_id');
    }
    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id');
    }
  

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function featuredimages()
    {
        return $this->hasMany(Image::class)->limit(5);
    }
}
