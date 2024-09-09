<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'status',
        'quantity',
        'date_com',
        'time_com',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function detailCommandes()
    {
        return $this->hasMany(DetailCommande::class, 'commande_id');
    }
}
