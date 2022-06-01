@extends('master.main')
@section('content')
    @component('brands.brand-list', ['brands' => $brands])
    @endcomponent
@endsection
