<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PageAlbumRequest extends Request
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
          'type'       =>  'required',
          'page_user'  =>  'required',
          'page_email' =>  'email|required',
          'album_id'   =>  'numeric|required|unique:page_albums'
        ];
    }

    public function messages()
    {
        return [
            'album_id.unique' => '該相簿已被使用'
        ];
    }

}
