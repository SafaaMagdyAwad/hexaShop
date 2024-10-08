<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'isPublished',
        'job_data_id',
    ];
    public function jobData(){
        return $this->belongsTo(JobData::class);
    }
    public function socialLink(){
        return $this->hasOne(SocialLink::class);
    }

}
