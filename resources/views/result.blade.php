@extends('layouts.admin')
@section('content')
        <div class="content">
            <div class="row"></div>


        {{--  Results goes here if iSverified relationship is --}}
            @if($source == 1)
                <h1 class="title-heading"> Prediction: This news item is likely to be from an unverified news source, so be careful of what decision you make with it.</h1>

            @else
                <h1 class="title-heading">  Prediction: This news item is likely to be from a verified news source.</h1>

            @endif
        </div>


@endsection
@section('scripts')
    @parent
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>{!! $chart5->renderJs() !!}{!! $chart6->renderJs() !!}--}}
@endsection
