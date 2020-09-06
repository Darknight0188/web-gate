<?php
namespace App\Services;

use App\Models\Candidate;
use App\Models\Candidate_attach_file;
use Illuminate\Support\Facades\Storage;

class CandidateService
{
    public function createCandidate($params)
    {
        $candidate = new Candidate();
        $candidate->email = $params['email'];
        $candidate->username = $params['username'];
        $candidate->password = $params['password'];
        $candidate->status = $params['status'];
        $candidate->created_by = $params['username'];
        $candidate->birthday = $params['birthday'];
        $candidate->address = $params['address'];
        $candidate->save();
        return $candidate;
    }

    public function uploadFile($data, $id)
    {
        $file = new Candidate_attach_file();
        $path = Storage::put('file', $data);
        $file->file_url = Storage::url($path);
        $file->candidate_id = $id;
        $file->type = $data->getClientOriginalExtension();
        $file->save();
    }
}
