<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'nohp', 'semester', 'ipk', 'jenis_beasiswa', 'upload_file'];
    protected $table = 'students';
}
