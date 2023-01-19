<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class positions extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'sport_id',
    ];

    public function sports(){
        $this->belongsTo(sports::class);
    }
}