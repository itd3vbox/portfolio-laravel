<?php

namespace App\Entities\Base\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class File extends Model
{
    use HasFactory;

    protected  $table = 'projects_files';

    protected $appends = [
        'src_public', 
    ];

    public function getSrcPublicAttribute()
    {
        return Storage::disk('public')->url($this->uri);
    }
}
