<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'user_id', 'document', 'author', 'description',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
