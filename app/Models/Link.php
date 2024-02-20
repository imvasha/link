<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'confirmed',
    ];

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }
}
