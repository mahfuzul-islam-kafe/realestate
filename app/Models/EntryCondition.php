<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryCondition extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function properties()
    {
        return $this->hasMany(Property::class, 'entry_condition');
    }
}
