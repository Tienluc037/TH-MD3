<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $table = "agent-management";
    protected $fillable = ['name','phone','email','address','managerName'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
