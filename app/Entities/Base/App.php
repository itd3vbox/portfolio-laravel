<?php

namespace App\Entities\Base;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class App extends Model
{
    use HasFactory;

    protected  $table = 'app';

    protected $appends = [
        
    ];
}
