@extends('layout')

@section('content')
    <h1>Regular Blade Template Title</h1>

    <hr>

    <test-component :data="{{ json_encode($data) }}"></test-component>

    <hr>
    
    <another-component></another-component>
@endsection
