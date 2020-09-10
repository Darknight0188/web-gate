<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table ='branch_id';
    protected $fillable = [
        'name', 'location', 'status'
    ];
}
