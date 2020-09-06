<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'username' => 'required|string',
            'password' => 'required|min:6',
            'status' => 'required|string',
            'birthday' => 'required',
            'address' => 'required',
            'file' => 'max:10000|mimes:pdf,doc,docx,txt,zip,rar'
        ];
    }
}
