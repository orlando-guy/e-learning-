<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['code','firstname','lastname','email','birthday','avatar','profil'];

    public function article ()
    {
        return $this->belongsTo('App\Articles')
    }
}
