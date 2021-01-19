<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $primaryKey ='media_id';

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
