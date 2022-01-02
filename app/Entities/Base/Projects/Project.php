<?php

namespace App\Entities\Base\Projects;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;

    protected  $table = 'projects';

    protected $appends = [
        'date_latest',
    ];

    public function getStatusAttribute($value)
    {
        $types = ['Not Available', 'Available'];

        return [
            'types' => $types,
            'value' => $value,
            'value_text' => $types[$value],
        ];
    }

    public function getDateLatestAttribute()
    {
        if($this->updated_at->add(7, 'day') > Carbon::now())
            return '<span class="new">New</span> ' . $this->updated_at->diffForHumans();
        return $this->updated_at->diffForHumans();
    }
}
