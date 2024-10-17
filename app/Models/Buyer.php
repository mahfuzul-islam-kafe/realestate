<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $guarded = [];
    public $casts = ['birth_date' => 'date'];
    use HasFactory;
}
