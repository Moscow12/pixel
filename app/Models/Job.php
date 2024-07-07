<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class, 'foreign_key', 'other_key');
    }
}
