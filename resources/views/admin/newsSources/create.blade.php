@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.newsSource.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.news-sources.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="source">{{ trans('cruds.newsSource.fields.source') }}</label>
                <input class="form-control {{ $errors->has('source') ? 'is-invalid' : '' }}" type="text" name="source" id="source" value="{{ old('source', '') }}">
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.newsSource.fields.source_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="website">{{ trans('cruds.newsSource.fields.website') }}</label>
                <input class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}" type="text" name="website" id="website" value="{{ old('website', '') }}">
                @if($errors->has('website'))
                    <div class="invalid-feedback">
                        {{ $errors->first('website') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.newsSource.fields.website_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_verified') ? 'is-invalid' : '' }}">
                    <input class="form-check-input" type="checkbox" name="is_verified" id="is_verified" value="1" required {{ old('is_verified', 0) == 1 || old('is_verified') === null ? 'checked' : '' }}>
                    <label class="required form-check-label" for="is_verified">{{ trans('cruds.newsSource.fields.is_verified') }}</label>
                </div>
                @if($errors->has('is_verified'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_verified') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.newsSource.fields.is_verified_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection