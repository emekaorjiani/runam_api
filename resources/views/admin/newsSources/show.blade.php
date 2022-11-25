@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newsSource.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news-sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newsSource.fields.id') }}
                        </th>
                        <td>
                            {{ $newsSource->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsSource.fields.source') }}
                        </th>
                        <td>
                            {{ $newsSource->source }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsSource.fields.website') }}
                        </th>
                        <td>
                            {{ $newsSource->website }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsSource.fields.is_verified') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $newsSource->is_verified ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.news-sources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection