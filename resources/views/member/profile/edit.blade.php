@extends('member.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">YOUR PROFILE</div>
                <div class="panel-body">
                    
                    <form action="{{route('memberprofile.update',['id'=>$member->id ])}}" class="form-horizontal" role="form" method="POST">
                        {{csrf_field()}}                                                                         
                        {{ method_field('PUT') }}
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-6">                                
                                <select name="gender" id="gender" class="form-control" required> 
                                    <option value="" {{ ($member->gender === NULL) ? 'selected' :''}}>Select gender</option>
                                    <option value="1" {{ ($member->gender === 1) ? 'selected' :''}}>Male</option>
                                    <option value="0" {{ ($member->gender === 0) ? 'selected' :''}}>Female</option>
                                </select>
                                @if ($errors->has('gender'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date of birth</label>
                            <div class="col-md-6">
                                <input data-provide="datepicker" id="dob" type="text" class="form-control datepicker" name="dob" value="{{ $member->dob }}" required autofocus>
                                @if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Telephone</label>
                            <div class="col-md-6">
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ $member->telephone }}" required autofocus>
                                @if ($errors->has('telephone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>
                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ $member->country }}" required autofocus>
                                @if ($errors->has('country'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>
                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ $member->city }}" required autofocus>
                                @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <p class="text-center">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    UPDATE PROFILE
                                </button>
                            </p>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection