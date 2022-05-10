@extends('layouts.template')
@section('title')
Halaman Dashboard
@endsection
@section('tab')
Halaman Dashboard
@endsection

@section('content')
@if(Auth::user()->level == 'admin')
    @include('dashboard.admin')
@elseif(Auth::user()->level == 'reviewer')
    @include('dashboard.reviewer')
@else
    @include('dashboard.siswa')
@endif
@endsection
