<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teaching_staff';
    protected $primaryKey = 'id_teaching_staff';
    protected $fillable = [
        'nip', 'fullname', 'position', 'google_scholar', 'phone', 'email', 'address', 'facebook', 'instagram', 'picture', 
    ];
}
