@extends('master.main')
@section('content')
    @component('cars.car-form-show', ['car' => $car])
    @endcomponent
@endsection
