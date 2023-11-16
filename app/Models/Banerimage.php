<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banerimage extends Model
{
    // use HasFactory;
    // protected $fillable = ['image_path'];

    protected $fillable = ['image'];

    public function banerimage()
    {
        return $this->belongsTo(Banerimage::class);
    }
}
