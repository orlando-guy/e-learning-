<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Articles extends Model
{
    protected $filable = ['article_title','author','article_cover','delay','date_add'];

    public function Author()
    {
        return $this->hasOne('App\Author');
    }
}
