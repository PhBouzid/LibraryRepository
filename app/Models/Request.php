<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;
    protected $table = 'media';

    public function realBook(){
        return $this->hasOne(Real_Book::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
