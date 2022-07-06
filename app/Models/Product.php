<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'qty',
        'description'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
