<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
    ];

    public function detailCommandes()
    {
        return $this->hasMany(DetailCommande::class);
    }
}
