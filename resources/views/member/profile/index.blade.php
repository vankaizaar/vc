@extends('member.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <!--                <div class="panel-heading">Your profile</div>-->
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="fb-profile">
                                <img align="left" class="fb-image-lg" src="{{Storage::url($cover->link)}}" alt="Profile image example"/>
                                <img align="left" class="fb-image-profile img-thumbnail" src="{{Storage::url($avatar->link)}}" alt="Profile image example"/>
                                <div class="fb-profile-text">
                                    <h1>{{$member->name}}</h1>
                                    <small>{{$profile->city}}, {{$profile->country}} &middot; </small>
                                    <small>Member since {{$profile->created_at->diffForHumans()}} &middot;</small>
                                    <small>{{$profile->dob->diffForHumans(null,True)}}</small>
                                    <p><small>{{$profile->about}}</small></p>
                                    @if(Auth::guard('web_member')->user()->id == $member->id)
                                   
                                    <a href = "{{route('memberprofile.edit', ['id'=>$profile->id])}}" class = "btn btn-sm btn-warning">Edit your profile</a>
                                   
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