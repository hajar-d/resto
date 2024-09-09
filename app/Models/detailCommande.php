<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'plats_id',
        'total',
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function plat()
    {
        return $this->belongsTo(Plat::class);
    }
}
