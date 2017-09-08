@extends('member.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">                
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="fb-profile">
                                <img align="left" class="fb-image-lg" src="{{Storage::url($artist->cover->link)}}" alt="Profile image example"/>
                                <img align="left" class="fb-image-profile img-thumbnail" src="{{Storage::url($artist->avatar->link)}}" alt="Profile image example"/>
                                <div class="fb-profile-text">
                                    <h1>{{$artist->name}}</h1>
                                    <small>{{$artist->profile->city}}, {{$artist->profile->country}} &middot; </small>
                                    <small>Member since {{$artist->profile->created_at->diffForHumans()}} &middot;</small>
                                    <small>{{$artist->profile->dob->diffForHumans(null,True)}}</small>
                                    <p><small>{{$artist->profile->about}}</small></p>  
                                    @if (Auth::guard('web_member')->user())
                                    <a href="{{route('hire.create',['id'=>$artist->id])}}" class="btn btn-sm btn-info">HIRE NOW</a>
                                    @endif
                                </div>
                                <hr />
                                @forelse ($artist->audio as $track)
                                <div class="ui360">
                                    <p><strong>{{$track->title}}</strong></p>
                                    <a href="{{Storage::url($track->link)}}"> </a>
                                </div>
                                @empty
                                <p class="text-danger">This artist has not yet uploaded their portfolio.</p>                                
                                @endforelse
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Similar artists</h2>
        </div>
    </div>
</div>
@endsection