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

        @foreach ($user->collections as $collection)
            <div class="ui segment">
                <div class="ui wrapping spaced buttons">
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