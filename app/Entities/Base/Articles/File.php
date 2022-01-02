<?php

namespace App\Entities\Base\Articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class File extends Model
{
    use HasFactory;

    protected  $table = 'articles_files';

    protected $appends = [
        
    ];
}
