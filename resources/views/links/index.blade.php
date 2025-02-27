@extends('layouts.app')

@section('main')

<div class="ui container">
    <a href="{{ route('links.create') }}" class="ui primary button">Novo</a>
    
    <div class="ui link cards">
        @foreach ($links as $link)
        <a class="ui card" href="{{ $link->url }}" target="_blank" >
            <div class="content">
                <div class="header">{{ $link->title }}</div>
                <div class="description">{{ $link->description }}</div>
            </div>
        </a>
        @endforeach
    </div>
</div>

@endsection