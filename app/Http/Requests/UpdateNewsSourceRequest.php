<?php

namespace App\Http\Requests;

use App\Models\NewsSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewsSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('news_source_edit');
    }

    public function rules()
    {
        return [
            'source' => [
                'string',
                'min:3',
                'max:255',
                'nullable',
            ],
            'website' => [
                'string',
                'min:4',
                'max:255',
                'nullable',
            ],
        ];
    }
}
