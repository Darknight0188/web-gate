<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = [
        'title', 'description', 'status', 'category', 'level', 'type', 'banner_img_url'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
