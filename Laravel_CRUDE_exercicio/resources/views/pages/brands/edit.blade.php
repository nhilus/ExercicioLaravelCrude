@extends('master.main')
@section('content')
    @component('brands.brand-form-edit', ['brand' => $brand])
    @endcomponent
@endsection
