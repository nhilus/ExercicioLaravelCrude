@extends('master.main')
@section('content')
        @component('cars.car-form-create', ['brands'=> \App\Brand::all()])
        @endcomponent
@endsection

