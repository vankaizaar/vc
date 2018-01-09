@extends('model.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">               
                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">                        
                            <div class="fb-profile">
                                @if (count($modelcover) === 1)
                                <img align="left" class="fb-image-lg" src="{{Storage::url($modelcover->link)}}" alt="Profile Cover Photo"/>
                                <img align="left" class="fb-image-profile img-thumbnail" src="{{Storage::url($modelavatar->link)}}" alt="Profile Photo"/>
                                <div class="fb-profile-text">
                                    <h3 style="margin:0;">{{$modeluser->name}}</h3>
                                    <span style="color:magenta">
                                        <small>Member since {{$modelprofile->created_at->diffForHumans()}} &middot;</small>
                                        <small>From {{$modelprofile->city}}, {{$modelprofile->country}} &middot;</small>
                                        <small>{{$modelprofile->dob->diffForHumans(null,True)}} &middot;</small>
                                        <small>{{$modelprofile->height}}ft &middot; {{$modelprofile->weight}}kgs</small>
                                    </span>
                                    <br /><small><strong class="text-uppercase">Bio: </strong>{{$modelprofile->about}}</small>                                    
                                    <br /><small><strong class="text-uppercase">Modeling speciality: </strong>{{$modelprofile->model_categories}}</small>
                                    <small></small>
                                    <p></p>
                                    @if(Auth::guard('web_model')->user()->id == $modeluser->id)

                                    <a href = "{{route('modelprofile.edit', ['id'=>$modelprofile->id])}}" class = "btn btn-sm btn-primary text-uppercase">Edit your profile</a>

                                    @endif

                                </div>
                                @else
                                <h3>Oops!</h3>
                                <p>You are yet to create you profile. Please update it here.</p>
                                <a href = "modelprofile/create" class = "btn btn-sm btn-primary text-uppercase">Edit your profile</a>
                                @endif
                            </div>                       
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection