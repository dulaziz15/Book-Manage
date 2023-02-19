<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_rak', 'golongan'
    ];

    /**
     * Get all of the comments for the Rak
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rak(): HasMany
    {
        return $this->hasMany('App\Book');
    }
}
