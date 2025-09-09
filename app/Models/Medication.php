<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Medication extends Model
{
    public function effects()
    {
        return $this->belongsToMany(Effect::class);
    }
}
