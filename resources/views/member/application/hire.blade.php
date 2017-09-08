@extends('member.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">SELECT THE JOB</div>
                <div class="panel-body">                    
                    @if($jobs->count() > 0)                   
                    <form action="{{route('hire.store')}}" class="form-horizontal" method="POST">
                        {{csrf_field()}}
                        @if ($errors->has('artist_id'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('artist_id') }}</strong>
                        </span>
                        @endif
                        @if ($errors->has('member_id'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('member_id') }}</strong>
                        </span>
                        @endif
                        <div class="form-group{{ $errors->has('job_id') ? ' has-error' : '' }}">
                            <label for="job_id" class="col-md-4 control-label">Select job</label>
                            <div class="col-md-6">
                                @foreach($jobs as $job)
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="job_id" id="optionsRadios1" value="{{$job->id}}" >
                                        {{$job->title}}
                                    </label>
                                </div>
                                @endforeach
                                @if ($errors->has('job_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('job_id') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="member_id" value="{{$member_id}}">
                        <input type="hidden" name="artist_id" value="{{$artist_id}}">
                        <br />
                        <input class="btn btn-warning btn-md" type="submit" value="PROCEED TO HIRE NOW">
                    </form>
                    @else
                    <p class="text-danger">You have no active jobs.</p>
                    <a  class="btn btn-primary btn-sm"href="{{route('job.create')}}">Please post a job first before proceeding to hire an artist.</a>
                    @endif


                </div>
            </div>       
        </div>
    </div>
</div>
@endsection