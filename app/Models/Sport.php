<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sports extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
    ];

    public function positions(){
        $this->hasMany(positions::class);
    }
    public function teams(){
        $this->hasMany(teams::class);
    }
}