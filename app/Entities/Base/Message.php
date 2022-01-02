<?php

namespace App\Entities\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Message extends Model
{
    use HasFactory;

    protected  $table = 'messages';

    protected $appends = [
        
    ];
}
