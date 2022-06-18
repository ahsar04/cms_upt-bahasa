<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingRegistration extends Model
{
    protected $table = 'training_registration';
    protected $primaryKey = 'id_training_registration';
    protected $fillable = [
        'id', 'id_training', 'status', 'note',
    ];
}