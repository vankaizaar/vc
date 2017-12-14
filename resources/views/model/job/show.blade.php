@extends('artist.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">{{$job->title}}</div>
                <div class="panel-body">
                    <small class="text-warning text-muted">Posted {{$job->created_at->diffForHumans()}}</small>
                    <div>
                        {{$job->description}}
                    </div>
                </div>
                <div class="panel-footer">                    
                    <form action="{{route('application.store')}}" method="POST">                       
                        {{ csrf_field() }}
                        @if ($errors->has('artist_id'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('artist_id') }}</strong>
                        </span>
                        @endif
                        @if ($errors->has('job_id'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('job_id') }}</strong>
                        </span>
                        @endif
                        <input type="hidden" name="member_id" value="{{$member_id}}">
                        <input type="hidden" name="artist_id" value="{{$artist_id}}">
                        <input type="hidden" name="job_id" value="{{$job->id}}">
                        <input class="btn btn-warning btn-md" type="submit" value="APPLY NOW">
                    </form>                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




