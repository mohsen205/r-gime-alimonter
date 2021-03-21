<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caractere_body extends Model
{
    use HasFactory;
    protected $table = "caractere_body";
    public $timestamp =  true;
   
    protected $fillable = [
        'id',
        'id_user',
        'sex',
        'taille',
        'poid',
        'age',
        'date',
        'created_at',
        'updated_at',
    ];

    protected $hidden = [
        'id_user',
    ];

}
