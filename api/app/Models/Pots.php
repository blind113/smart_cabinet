<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class Pots extends Model
{
    protected $table = "smart_pots";
    protected $fillable = [
        'user_id', 'cabinet_id', 'type_measure', 'capacity', 'description'
    ];
}