@extends('layouts.app')

@section('main')

    <div class="ui center aligned text container">

        <img src="{{ Storage::url('images/user-profile-image.jpg') }}" alt="" class="ui centered small circular image" style="">

        <h1 class="ui header">
            {{ $user->name }}
            <div class="sub header">
                {{ '@'.$user->username }}
            </div>
        </h1>

        <div class="ui basic segment">
            <div class="ui wrapping spaced fluid buttons">
                @foreach ($user->linksWithoutCollection as $link)
                    <a href="{{ $link->url }}" class="ui fluid button">
                        {{ $link->title }}
                    </a>
                @endforeach
            </div>
        </div>

        
        
        @foreach ($user->collections as $collection)

            <div class="ui section hidden divider"></div>

            <div class="ui segment">
                <h3 class="ui header">{{ $collection->name }}</h3>
                <div class="ui wrapping spaced fluid buttons">
                    @foreach ($collection->links as $link)
                        <a href="{{ $link->url }}" class="ui fluid button">
                            {{ $link->title }}
                        </a>
                    @endforeach
                </div>
            </div>

        @endforeach

    </div>
@endsection