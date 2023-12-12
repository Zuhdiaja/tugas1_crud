<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    // protected $primaryKey = 'id';
    protected $fillable = ['name','class_id', 'nis','gender','image'];
    
    // public function parents(){
    //     return $this->hasOne('App\models\parents');
    // }
    public function class(){
        return $this->belongsTo(classroom::class);
    }
}
