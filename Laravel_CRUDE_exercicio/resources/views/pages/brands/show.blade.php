@extends('master.main')
@section('content')
    @component('brands.brand-form-show', ['brand' => $brand])
    @endcomponent
@endsection
