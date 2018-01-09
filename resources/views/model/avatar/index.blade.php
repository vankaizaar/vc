@extends('artist.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Current profile photo</div>
                <div class="panel-body">                                       
                    <div class="row">
                        <div class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
                            <div class="thumbnail">
                                <img src="{{Storage::url($avatar->link)}}" class="img-thumbnail" alt="profile picture">

                                <p><a  class="btn btn-primary btn-sm"href="{{route('avatar.create')}}">Change profile picture</a></p>

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
