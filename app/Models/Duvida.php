<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
    use HasFactory;

    protected $table = "duvidas";
    
    protected $fillable =[
        'nome_duv',
        'email_duv',
        'msg_duv',
    ];
}

        
