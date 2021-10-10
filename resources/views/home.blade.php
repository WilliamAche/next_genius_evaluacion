@extends('layouts.app')

@section('content')
<section id="dashboard-analytics">

    @include('pages.chart.index')

    @include('pages.carousel.index')

    @include('pages.calender.index')

</section>
@endsection
