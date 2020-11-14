<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Campaign extends Model
{
    use HasFactory;

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class);
    }

    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }
}
