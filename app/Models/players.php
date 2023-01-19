<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'score',
        'team_id',
    ];

    public function teams(){
        $this->belongsTo(teams::class);
    }
}