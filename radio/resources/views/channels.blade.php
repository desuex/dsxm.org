@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="grid">
            @foreach($channels as $channel)
                <a href="/channels/{{$channel->key}}" class="tile" style="background-image: url('{{ url('https:'.$channel->asset_url) }}')">
                    <div class="content">
                        <h2>{{$channel->name}}</h2>
                    </div>
                </a>
            @endforeach


        </div>
    </div>


@endsection
