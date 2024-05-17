<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCircularInfo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function JobCircular(){
        return $this->belongsTo(JobTitleInfo::class, 'jobtitleId', 'jobtitleId');
    }
}
