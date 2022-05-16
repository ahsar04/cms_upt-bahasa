<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'service';
    protected $primaryKey = 'id_service';
    protected $fillable = [
        'service_type', 'description_service',
    ];
}
