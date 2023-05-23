@extends('layouts.app')
@section('content')
    <div class="playlist">
        <h1 class="title">{{$channel->name}}</h1>
        <h2 class="subtitle">Last tracks played on the channel</h2>

        <table class="table">
            <thead>
            <tr>
                <th>Track</th>
                <th>Length</th>
                <th>More Info</th>
                <th>Services</th>
                <th>Last Played</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tracks as $track)
                <tr class="track">
                    <td>
                        <div class="track-info">
                            <span class="artist">{{$track->display_artist}}</span> - <span class="track-name">{{$track->display_title}}</span>
                        </div>
                    </td>
                    <td class="length">{{$track->displayLength()}}</td>
                    <td class="links">
                        <a href="https://www.di.fm/tracks/{{$track->track_id}}" class="more-info">More Info</a>

                    </td>
                    <td class="services">
                        <div class="service-icons">
                            <img src="spotify-icon.png" alt="Spotify">
                            <img src="apple-music-icon.png" alt="Apple Music">
                            <img src="lastfm-icon.png" alt="Last.FM">
                            <img src="soundcloud-icon.png" alt="SoundCloud">
                            <img src="youtube-icon.png" alt="YouTube">
                        </div>
                    </td>
                    <td class="last-played">{{$track->start_time}}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>
    {!! $tracks->links() !!}

@endsection
