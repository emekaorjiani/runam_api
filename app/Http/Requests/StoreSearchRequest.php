<?php

namespace App\Http\Requests;

use App\Models\Search;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSearchRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('search_create');
    }

    public function rules()
    {
        return [
            'news_title' => [
                'string',
                'min:4',
                'max:255',
//                'nullable',
            ],

            'website' => [
                'string',
                'min:4',
                'max:255',
                'nullable',
            ],

            'source' => [
                'required',
                'string',
                'integer',

            ],
        ];
    }
}
