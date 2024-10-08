<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobData extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
    ];
    public function employees(){
        return $this->hasMany(Employee::class);
    }
}
