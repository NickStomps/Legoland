<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestellingenRegel extends Model
{
    use HasFactory;

    public function bestelling()
    {
        return $this->belongsTo(Bestellingen::class, 'bestelling_id', 'id');
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ticket_id', 'id');
    }
}
