<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateAttachFile extends Model
{
    protected $table = 'candidate_attach_files';
    protected $fillable = ['candidate_id', 'file_url', 'type'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
