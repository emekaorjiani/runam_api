<?php

namespace App\Http\Requests;

use App\Models\Search;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSearchRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('search_edit');
    }

    public function rules()
    {
        return [
            'news_title' => [
                'string',
                'min:4',
                'max:255',
                'nullable',
            ],
            'click' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
