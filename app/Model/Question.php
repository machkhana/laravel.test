<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['title','text','votes'];
    protected $table='questions';

    public function users(){
        return $this->belongsTo(User::class);
    }
}
