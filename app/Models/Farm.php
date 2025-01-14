<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fimsCrops()
    {
        return $this->hasMany(FimsCrop::class);
    }

    public function pasFields()
    {
        return $this->hasMany(PasField::class);
    }
}
