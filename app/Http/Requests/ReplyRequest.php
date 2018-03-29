<?php

namespace App\Http\Requests;

class ReplyRequest extends Request
{
    public function rules()
    {
        return [
            'content' => 'required|min:2',
        ];
    }
    //自定义消息提醒
    public function messages()
    {
        return [


        ];
    }
}