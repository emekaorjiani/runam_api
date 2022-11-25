@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.search.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.searches.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="news_title">{{ trans('cruds.search.fields.news_title') }}</label>
                <input class="form-control {{ $errors->has('news_title') ? 'is-invalid' : '' }}" type="text" name="news_title" id="news_title" value="{{ old('news_title', '') }}">
                @if($errors->has('news_title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('news_title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.search.fields.news_title_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="click">{{ trans('cruds.search.fields.click') }}</label>
                <input class="form-control {{ $errors->has('click') ? 'is-invalid' : '' }}" type="number" name="click" id="click" value="{{ old('click', '') }}" step="1" required>
                @if($errors->has('click'))
                    <div class="invalid-feedback">
                        {{ $errors->first('click') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.search.fields.click_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="source_id">{{ trans('cruds.search.fields.source') }}</label>
                <select class="form-control select2 {{ $errors->has('source') ? 'is-invalid' : '' }}" name="source_id" id="source_id">
                    @foreach($sources as $id => $entry)
                        <option value="{{ $id }}" {{ old('source_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.search.fields.source_helper') }}</span>
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