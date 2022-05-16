<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'training';
    protected $primaryKey = 'id_training';
    protected $fillable = [
        'training', 'service_type', 'description_training', 'quota', 'opening_date', 'excercise_date', 'closing_date',
    ];
}
