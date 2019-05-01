<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed DB
 */
class Question extends Model
{
    protected $fillable=['title','text','votes'];
    protected $table='questions';

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments(){
        return $this->hasMany(Questioncomment::class, 'id');
    }

}
