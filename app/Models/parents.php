<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class parents extends Model
{
    use HasFactory;
    protected $table = 'parents';
    protected $fillable = ['name','work','students_id'];
  
    public function student(){
        return $this->belongsTo('App\models\student');
    }
}
