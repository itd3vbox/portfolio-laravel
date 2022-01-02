<?php

namespace App\Entities\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Lang extends Model
{
    use HasFactory;

    protected  $table = 'langs';

    protected $appends = [

    ];
}
