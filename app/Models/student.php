<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kuis1(){
        return $this->hasMany(kuis1::class);
    }
    public function kuis2(){
        return $this->hasMany(kuis2::class);
    }
    public function kuis3(){
        return $this->hasMany(kuis3::class);
    }
    public function kuis4(){
        return $this->hasMany(kuis4::class);
    }
}
