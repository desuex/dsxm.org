
@extends('layouts.app')
@section('content')
    <div class="bg-purple-500"></div>
    <div class="bg-blue-500"></div>
    <div class="bg-red-500"></div>
    <div class="bg-orange-500"></div>
    <div class="bg-cyan-500"></div>
    <div class="bg-pink-500"></div>
    <div class="bg-yellow-500"></div>
    <div class="flex flex-wrap h-screen">
        @foreach($networks as $network)
            <div class="w-1/3 h-1/2 p-4">
                <div class="h-full rounded-lg bg-{{$network->color()}}-500 flex flex-col justify-center items-center">
                    <h1 class="text-4xl text-white font-bold">{{$network->name}}</h1>
                    <p class="text-white">Active Channel: {{$network->active_channel_count}}</p>
                    <a href="{{$network->url}}" class="text-white underline">Official website</a>
                    <a href="/networks/{{$network->key}}/channels" class="text-white underline font-bold">Explore</a>

                </div>
            </div>
        @endforeach
    </div>


@endsection
