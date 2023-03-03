<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'games';

    protected $fillable = [
        "name",
        "description",
        "year_create",
        "price",
        "category_id",
        "category_name"
    ];
}