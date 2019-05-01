<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Questioncomment extends Model
{
    //
    protected $table='questioncomments';
    protected $fillable=['text'];

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function questions(){
        return $this->belongsTo(Question::class,'question_id');
    }
}
