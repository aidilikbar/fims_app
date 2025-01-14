<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FimsFinance extends Model
{
    use HasFactory;

    public function farm()
    {
        return $this->belongsTo(Farm::class);
    }
}
