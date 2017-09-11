@extends('artist.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">               
                <div class="panel-body">
                    <h2>Your uploaded voice samples</h2>


                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>

                                <th>Sample</th>

                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($audio as $track)
                            <tr>

                                <td> 
                                    <h4>{{ $track->title }}</h4>
                                    <div class="sm2-bar-ui compact">

                                        <div class="bd sm2-main-controls">

                                            <div class="sm2-inline-texture"></div>
                                            <div class="sm2-inline-gradient"></div>

                                            <div class="sm2-inline-element sm2-button-element">
                                                <div class="sm2-button-bd">
                                                    <a href="#play" class="sm2-inline-button sm2-icon-play-pause">Play / pause</a>
                                                </div>
                                            </div>

                                            <div class="sm2-inline-element sm2-inline-status">

                                                <div class="sm2-playlist">
                                                    <div class="sm2-playlist-target">
                                                        <!-- playlist <ul> + <li> markup will be injected here -->
                                                        <!-- if you want default / non-JS content, you can put that here. -->
                                                        <noscript><p>JavaScript is required.</p></noscript>
                                                    </div>
                                                </div>

                                                <div class="sm2-progress">
                                                    <div class="sm2-row">
                                                        <div class="sm2-inline-time">0:00</div>
                                                        <div class="sm2-progress-bd">
                                                            <div class="sm2-progress-track">
                                                                <div class="sm2-progress-bar"></div>
                                                                <div class="sm2-progress-ball"><div class="icon-overlay"></div></div>
                                                            </div>
                                                        </div>
                                                        <div class="sm2-inline-duration">0:00</div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="sm2-inline-element sm2-button-element sm2-volume">
                                                <div class="sm2-button-bd">
                                                    <span class="sm2-inline-button sm2-volume-control volume-shade"></span>
                                                    <a href="#volume" class="sm2-inline-button sm2-volume-control">volume</a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="bd sm2-playlist-drawer sm2-element">

                                            <div class="sm2-inline-texture">
                                                <div class="sm2-box-shadow"></div>
                                            </div>

                                            <!-- playlist content is mirrored here -->

                                            <div class="sm2-playlist-wrapper">
                                                <ul class="sm2-playlist-bd">
                                                    <li><a href="{{Storage::url($track->link)}}">{{ $track->title }} - {{ $track->about_sample }}</a></li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>   
                                    <br /> <br />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rhoncus mauris cursus ex maximus semper. Aliquam faucibus ex enim, at ornare metus convallis eu.</p>
                                </td>

                                <td>
                                    <form action="{{route('audio.destroy', ['id'=>$track->id ])}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input class="btn btn-primary btn-md text-uppercase" type="submit" value="Delete">
                                    </form>                                       
                                </td>
                            </tr>
                            @empty
                        <p class="text-danger">You have not yet uploaded any tracks yet.</p>
                        <a  class="btn btn-primary btn-sm text-uppercase"href="{{route('audio.create')}}">Start uploading</a>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
