<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table='laporans';
    protected $fillable =[
        'user_id','subject','priority','description','status'
    ];
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
   
}
