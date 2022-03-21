<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public  $table= 'status';
    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
