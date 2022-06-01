@extends('master.main')
@section('content')
    @component('cars.car-form-edit', ['car' => $car, 'brands'=> $brands] )
    @endcomponent
@endsection
