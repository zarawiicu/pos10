@extends('layouts.app')

@section('subtitle', 'Ahlan wa Sahlan')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content_body')
    <p>Welcome to this beautiful admin panel.</p>
@endsection

@push('css')

@endpush

@push('js')
    <script> console.log("Hi, I'm using the Laravel - AdminLTE package"); </script>
@endpush
