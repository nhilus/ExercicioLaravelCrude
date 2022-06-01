@extends('master.main')
@section('content')
    @component('cars.car-list', ['cars' => $cars])
    @endcomponent
@endsection
