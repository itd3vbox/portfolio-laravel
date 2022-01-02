<?php

namespace App\Entities\Base\Articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lang extends Model
{
    use HasFactory;

    protected  $table = 'articles_langs';

    protected $appends = [

    ];

    public function article()
    {
        return $this->belongsTo('App\Entities\Base\Articles\Article');
    }

    public function lang()
    {
        return $this->belongsTo('App\Entities\Base\Lang');
    }
}
