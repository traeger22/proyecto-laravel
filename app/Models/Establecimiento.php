<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    use HasFactory;

    public function secretaria()
    {
        return $this->belongsTo(Secretaria::class);
    }

    public function sedes()
    {
        return $this->hasMany(Sede::class);
    }

}
