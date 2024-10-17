<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function ad_type()
    // {
    //     return $this->belongsTo(AdType::class, 'ad_type');
    // }
    // public function entry_condition()
    // {
    //     return $this->belongsTo(EntryCondition::class, 'entry_condition');
    // }
    // public function property_condition()
    // {
    //     return $this->belongsTo(PropertyCondition::class, 'property_condition');
    // }
    // public function property_type()
    // {
    //     return $this->belongsTo(PropertyType::class, 'property_type');
    // }
    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id'); 
    }
    public function images()
    {
        return $this->hasMany(Image::class); 
    }
}
