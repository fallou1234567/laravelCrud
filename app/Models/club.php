<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;

    protected $garded = [];

    /**
     * Get all of the joueurs for the club
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function joueurs()
    {
        return $this->hasMany(Joueur::class);
    }
}
