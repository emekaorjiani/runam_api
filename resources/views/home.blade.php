@extends('layouts.admin')
@section('content')
    @if( Auth::user()->id == 1)
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="{{ $settings1['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings1['total_number']) }}</div>
                                    <div>{{ $settings1['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings2['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings2['total_number']) }}</div>
                                    <div>{{ $settings2['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings3['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings3['total_number']) }}</div>
                                    <div>{{ $settings3['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $settings4['column_class'] }}">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-0">
                                    <div class="text-value">{{ number_format($settings4['total_number']) }}</div>
                                    <div>{{ $settings4['chart_title'] }}</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                        <div class="{{ $chart5->options['column_class'] }}">
                            <h3>{!! $chart5->options['chart_title'] !!}</h3>
                            {!! $chart5->renderHtml() !!}
                        </div>
                        <div class="{{ $chart6->options['column_class'] }}">
                            <h3>{!! $chart6->options['chart_title'] !!}</h3>
                            {!! $chart6->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @else
        <div class="content">
            <div class="row"></div>
            <form method="post" action="{{ route("admin.searches.store") }}">
                @csrf
            <h3 class="title-heading">Start Your Search</h3>
            <div class="mb-3">
                <label for="Topic" class="form-label">Enter News Headline to find out! <span class="text-danger">*</span></label><br>
                <small>'e.g. Former Buhari minister asks court to disqualify Tinubu and Atiku on vote-buying allegation'</small>
                <textarea name="news_title" class="form-control" id="news_title" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Source Name <span class="text-danger">*</span></label><br>
                <small>Select from the list or use Others if not in the list.</small>
                <select type="text" name="source" class="form-control" id="source" required placeholder="Enter Source Name: 'e.g.: Punch, Thisday, Vanguard'">
                    @php
                        $sources = \App\Models\NewsSource::pluck('source', 'id')->prepend(trans('global.pleaseSelect'), '');
                    @endphp
                    @foreach($sources as $id => $entry)
                        <option value="{{ $id }}" {{ old('source_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Enter Website (optional) </label>
                <input type="text" name="website" class="form-control" id="website" placeholder="e.g. www.www.vanguardngr.com">
            </div>
                <button class="btn btn-lg btn-pills btn-warning" type="submit"> Verify </button>

            </form>
        </div>


    @endif
@endsection
@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}
@endsection
