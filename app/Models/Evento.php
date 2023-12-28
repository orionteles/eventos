<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{

    protected $fillable = ['nome', 'data'];
    protected $dates = ['deleted_at', 'data'];

    use HasFactory;
}
