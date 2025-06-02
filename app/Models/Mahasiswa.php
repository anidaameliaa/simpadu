<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    //
    protected $table ='mahasiswa';

    public function prodi(): BelongsTo
    {
        return $this->belongsto(Prodi::class, 'id', 'id');
    }
} 
