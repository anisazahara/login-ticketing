<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agentstatus extends Model
{
    use HasFactory;
    protected $table='status';
    protected $fillable =[
        'status'
        
    ];
}
