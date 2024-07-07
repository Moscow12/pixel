<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class, 'foreign_key', 'other_key');
    }

    public function tag(string $name): void{
        
    }

    public function tags(): BelongsToMany
    {
       /**
         * The roles that belong to the Job
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
       
         
        return $this->belongsToMany(Tag::class);
        
    }
    
}
