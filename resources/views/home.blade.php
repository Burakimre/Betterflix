@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('content')
    <div class="h-full min-h-screen w-full">
        <x-movies.billboard />

        {{-- @foreach ($rows as $row)
            <x-movies.row :title="$row['title']" :media="json_encode($row['media'])"/>
        @endforeach --}}
    </div>
@endsection