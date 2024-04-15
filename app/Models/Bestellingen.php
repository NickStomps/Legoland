<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bestellingen extends Model
{
    use HasFactory;

    protected $table = 'bestellingen';

    public function bestellingen_regels()
    {
        return $this->hasMany(BestellingenRegel::class);
    }
}
