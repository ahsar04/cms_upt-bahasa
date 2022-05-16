<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $table = 'procedure';
    protected $primaryKey = 'id_procedure';
    protected $fillable = [
        'headline_procedure', 'description_procedure', 'link_procedure',
    ];
}
