<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Effect extends Model
{
    public function medications()
    {
        return $this->belongsToMany(Medication::class);
    }
}
