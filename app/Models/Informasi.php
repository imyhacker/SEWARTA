<?php

namespace App\Models;

use App\Models\Informasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Informasi extends Model
{
    use HasFactory;
    protected $table = 'informasi';
    protected $guarded = [];
}
