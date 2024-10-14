<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'criteria',
        'alert_frequency',
        'is_active',
    ];

    protected $casts = [
        'criteria' => 'json',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
