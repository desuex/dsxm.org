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
                            <a href="https://open.spotify.com/search/{{$track->display_artist.' - '.$track->display_title}}"><img src="spotify-icon.png" alt="Spotify"></a>
                            <a href="https://music.apple.com/us/search?term={{$track->display_artist.' - '.$track->display_title}}"><img src="apple-music-icon.png" alt="Apple Music"></a>
                            <a href="https://www.youtube.com/results?search_query={{$track->display_artist.' - '.$track->display_title}}"><img src="youtube-icon.png" alt="YouTube"></a>
                            <a href="https://www.last.fm/search?q={{$track->display_artist.' - '.$track->display_title}}"><img src="lastfm-icon.png" alt="Last.FM"></a>
                            <a href="https://soundcloud.com/search?q={{$track->display_artist.' - '.$track->display_title}}"><img src="soundcloud-icon.png" alt="SoundCloud"></a>
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
