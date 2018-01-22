@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">               
                    <div class="panel-body">
                        <div class="container-fluid">
                            <div class="row">                        
                                <div class="fb-profile">
                                    @if (count($cover) === 1)
                                    <img align="left" class="fb-image-lg" src="{{Storage::url($cover->link)}}" alt="Profile Cover Photo"/>
                                    <img align="left" class="fb-image-profile img-thumbnail" src="{{Storage::url($avatar->link)}}" alt="Profile Photo"/>
                                    <div class="fb-profile-text">
                                        <h3 style="margin:0;">{{$artist->name}}</h3>
                                        <small>Member since {{$profile->created_at->diffForHumans()}} &middot;</small>
                                        <small>{{$profile->dob->diffForHumans(null,True)}}</small>
                                        <br /><small><strong class="text-uppercase">Bio: </strong>{{$profile->about}}</small>                                    
                                        <br /><small><strong class="text-uppercase">Native language(s): </strong>{{$profile->native_language}}</small>
                                        <br /><small><strong class="text-uppercase">Voice speciality: </strong>{{$profile->voice_categories}}</small>
                                        <small></small>
                                        <p></p>
                                        @if(Auth::guard('web_artist')->user()->id == $artist->id)

                                        <a href = "{{route('profile.edit', ['id'=>$profile->id])}}" class = "btn btn-sm btn-primary text-uppercase">Edit your profile</a>

                                        @endif

                                    </div>
                                    @else
                                    <h3>Oops!</h3>
                                    <p>You are yet to create you profile. Please update it here.</p>
                                    <a href = "profile/create" class = "btn btn-sm btn-primary text-uppercase">Edit your profile</a>
                                    @endif
                                </div>                       
                            </div>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection