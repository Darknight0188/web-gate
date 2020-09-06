<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $fillable = [
        'email','username','password','status','birthday','address','created_by','updated_by'
    ];

    public function candidateAttachFile()
    {
        return $this->hasMany(candidateAttachFile::class);
    }
}
