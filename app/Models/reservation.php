<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'nombr_pers',
        'date_res',
        'time_res',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
