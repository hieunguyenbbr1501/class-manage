@extends('trungduy/layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/navigation.css') }}">
@endsection
@section('content')
    <div style="display: flex;margin-right: 10px;margin-left: 10px">
        @include('trungduy/modules.postDoc')
        @include('trungduy/modules.navigation')
    </div>
@endsection