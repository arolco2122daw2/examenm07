<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soci extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';

    public $incrementing = false;
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'cognoms',
        'email'
    ];
}
