@extends('member.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Current cover photo</div>
                <div class="panel-body">                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">
                                <img src="{{Storage::url($cover->link)}}" class="img-thumbnail" alt="cover photo">

                                <p><a  class="btn btn-primary btn-sm"href="{{route('membercover.create')}}">Change profile picture</a></p>

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
