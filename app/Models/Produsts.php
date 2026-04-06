<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produsts extends Model
{
    protected $table = "products";

    protected $fillable = ([
        "id","created_at","updated_at"
    ]);


}
