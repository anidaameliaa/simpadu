<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    //
    protected $table ='prodi';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    
    protected $fillable = [
        'id',
        'nama',
        'kaprodi',
        'jurusan',
    ];

    public function prodi(): HasMany
    {
        return $this->hasMany(Prodi::class, 'id', 'id');
    }
}

