<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "tasks";

    protected $fillable = [
        "nome",
        "descrizione",
        "data",
        "completato"
    ];
}
