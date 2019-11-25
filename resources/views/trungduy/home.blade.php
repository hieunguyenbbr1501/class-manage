@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
@endsection
@section('content')
    @include('trungduy/modules.homeMd')
    <div style="display: flex;margin-right: 10px;margin-left: 10px">
    @include('trungduy/modules.newGene')
    @include('trungduy/modules.navigation')
    </div>
@endsection