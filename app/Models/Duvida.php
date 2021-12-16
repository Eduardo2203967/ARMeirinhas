<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duvida extends Model
{
    use HasFactory;
    public $fillable = ['nome_duv', 'email_duv', 'msg_duv'];
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
}



        
