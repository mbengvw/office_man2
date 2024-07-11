<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KuesionerCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama' => 'required',
            'usia'  => 'required',
            'pendidikan'  => 'required',
            'pekerjaan'  => 'required',
            'no_1'     =>  'required',
            'no_2'     =>  'required',
            'no_3'     =>  'required',
            
            'no_5'     =>  'required',
            'no_6'     =>  'required',
            'no_7'     =>  'required',
            'no_8'     =>  'required',
            'no_9'     =>  'required',
            'no_10'    =>  'required',
            'saran'    =>   'required',
        ];
    }
}
