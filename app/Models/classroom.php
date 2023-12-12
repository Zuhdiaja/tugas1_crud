<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;
    protected $table = 'class';

    protected $fillable = ['name'];

    public function student(){
            return $this->hasMany(student::class, 'class_id','id');
    }
}
