<?php
namespace App\Services;

use App\Models\Candidate;
use App\Models\CandidateAttachFile;
use Illuminate\Support\Facades\Storage;

class CandidateService
{
    public function createCandidate($params)
    {
        $candidate = new Candidate();
        $candidate->full_name = $params['full_name'];
        $candidate->phone = $params['phone'];
        $candidate->email = $params['email'];
        $candidate->user_name = $params['user_name'] ?? null;
        $candidate->password = bcrypt($params['password']) ?? null;
        $candidate->birthday = $params['birthday'] ?? null;
        $candidate->address = $params['address'] ?? null;
        $candidate->status = $params['status'];
        $candidate->save();
        return $candidate;
    }

    public function uploadFile($data, $id)
    {
        $file = new CandidateAttachFile();
        $path = $data->store('public/file');
        $file->file_url = Storage::url($path);
        $file->candidate_id = $id;
        $file->save();
    }
}
