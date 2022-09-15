@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="h-full min-h-screen w-full bg-neutral-900">
        <x-movies.billboard />
    </div>
@endsection