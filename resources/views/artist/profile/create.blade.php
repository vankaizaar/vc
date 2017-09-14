@extends('artist.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">                
                <div class="panel-body">
                    <h2>Lets get to know you</h2>
                    <form action="{{route('profile.store')}}" class="form-horizontal" role="form" method="POST">
                        {{csrf_field()}}                                                                         

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>
                            <div class="col-md-8">                                
                                <select name="gender" id="gender" class="form-control" required> 
                                    <option value="">Select gender</option>
                                    <option value="1" @if(old('gender') == '1') selected @endif>Male</option>
                                    <option value="0" @if(old('gender') == '0') selected @endif>Female</option>
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
                            <div class="col-md-8">
                                <input data-provide="datepicker" id="dob" type="text" class="form-control datepicker" name="dob" value="{{ old('dob') }}" required>
                                @if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label for="telephone" class="col-md-4 control-label">Telephone</label>
                            <div class="col-md-8">
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="Telephone" required autofocus>
                                @if ($errors->has('telephone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telephone') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>
                            <div class="col-md-8">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('country') }}" placeholder="Country" required autofocus>
                                @if ($errors->has('country'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('country') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>
                            <div class="col-md-8">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="City" required autofocus>
                                @if ($errors->has('city'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                            <label for="about" class="col-md-4 control-label">Tell us a bit about yourself</label>
                            <div class="col-md-8">
                                <textarea name="about" id="about" cols="30" rows="10" class="form-control" placeholder="About you.." required>{{ old('about') }}</textarea> 
                                @if ($errors->has('about'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('about') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('native_language') ? ' has-error' : '' }}">
                            <label for="native_language" class="col-md-4 control-label">What are your native languages?</label>
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="English" @if(is_array(old('native_language')) && in_array('English', old('native_language'))) checked @endif>English</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="Swahili" @if(is_array(old('native_language')) && in_array('Swahili', old('native_language'))) checked @endif>Swahili</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="French" @if(is_array(old('native_language')) && in_array('French', old('native_language'))) checked @endif>French</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="Portuguese" @if(is_array(old('native_language')) && in_array('Portuguese', old('native_language'))) checked @endif>Portuguese</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="Spanish" @if(is_array(old('native_language')) && in_array('Spanish', old('native_language'))) checked @endif>Spanish</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="German" @if(is_array(old('native_language')) && in_array('German', old('native_language'))) checked @endif>German</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="Japanese" @if(is_array(old('native_language')) && in_array('Japanese', old('native_language'))) checked @endif>Japanese</label>
                                    <label class="checkbox"><input type="checkbox" name="native_language[]" value="Arabic" @if(is_array(old('native_language')) && in_array('Arabic', old('native_language'))) checked @endif>Arabic</label>
                                </div>

                                @if ($errors->has('native_language'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('native_language') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('voice_categories') ? ' has-error' : '' }}">
                            <label for="voice_categories" class="col-md-4 control-label">What voice genders and ages can you execute really well?</label>
                            <div class="col-md-8">
                                <div class="checkbox">
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Male Child" @if(is_array(old('voice_categories')) && in_array('Male Child', old('voice_categories'))) checked @endif>Male | Child</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Male Teenage" @if(is_array(old('voice_categories')) && in_array('Male Teenage', old('voice_categories'))) checked @endif>Male | Teenage</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Male Young Adult" @if(is_array(old('voice_categories')) && in_array('Male Young Adult', old('voice_categories'))) checked @endif>Male | Young Adult</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Male Middle Age" @if(is_array(old('voice_categories')) && in_array('Male Middle Age', old('voice_categories'))) checked @endif>Male | Middle Age</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Male Senior" @if(is_array(old('voice_categories')) && in_array('Male Senior', old('voice_categories'))) checked @endif>Male | Senior</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Female Child" @if(is_array(old('voice_categories')) && in_array('Female Child', old('voice_categories'))) checked @endif>Female | Child</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Female Teenage" @if(is_array(old('voice_categories')) && in_array('Female Teenage', old('voice_categories'))) checked @endif>Female | Teenage</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Female Young Adult" @if(is_array(old('voice_categories')) && in_array('Female Young Adult', old('voice_categories'))) checked @endif>Female | Young Adult</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Female Middle Age" @if(is_array(old('voice_categories')) && in_array('Female Middle Age', old('voice_categories'))) checked @endif>Female | Middle Age</label>
                                    <label class="checkbox"><input type="checkbox" name="voice_categories[]" value="Female Senior" @if(is_array(old('voice_categories')) && in_array('Female Senior', old('voice_categories'))) checked @endif>Female | Senior</label>
                                </div>

                                @if ($errors->has('voice_categories'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('voice_categories') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">In your opinion, how much time do you reckon it would take you to record, edit, and "clean up" a great quality track for the following projects?</label>
                            <div class="col-md-8">
                                <div class="form-group {{ $errors->has('project_5000_time') ? ' has-error' : '' }}">
                                    <div class="col-sm-4">
                                        A project of <b>5000</b> words <br />
                                        (short audiobooks, manuals)
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="project_5000_time" type="text" class="form-control" name="project_5000_time" value="{{ old('project_5000_time') }}" required>
                                        @if ($errors->has('project_5000_time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_5000_time') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-sm-2" for="project_5000_time">Minutes</label>
                                </div>
                                <div class="form-group {{ $errors->has('project_500_time') ? ' has-error' : '' }}">
                                    <div class="col-sm-4">
                                        A project of <b>500</b> words <br />
                                        (short podcast, a video for a website)
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="project_500_time" type="text" class="form-control" name="project_500_time" value="{{ old('project_500_time') }}" required>
                                        @if ($errors->has('project_500_time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_500_time') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-sm-2" for="project_500_time">Minutes</label>
                                </div>
                                <div class="form-group {{ $errors->has('project_50_time') ? ' has-error' : '' }}">
                                    <div class="col-sm-4">
                                        A project of <b>50</b> words <br />
                                        (a radio ad, a voicemail)
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="project_50_time" type="text" class="form-control" name="project_50_time" value="{{ old('project_50_time') }}" required>
                                        @if ($errors->has('project_50_time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_50_time') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-sm-2" for="project_50_time">Minutes</label>
                                </div>
                                <div class="form-group {{ $errors->has('project_5_time') ? ' has-error' : '' }}">
                                    <div class="col-sm-4">
                                        A project of <b>5</b> words <br />
                                        (a phone prompt, a radio tag)
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="project_5_time" type="text" class="form-control" name="project_5_time" value="{{ old('project_5_time') }}" required>
                                        @if ($errors->has('project_5_time'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_5_time') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <label class="control-label col-sm-2" for="project_5_time">Minutes</label>
                                </div>                                
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">How much would you charge us to use your awesome voice on each of the following projects?</label>

                            <div class="col-md-8">
                                <p><strong>Please note this</strong></p>
                                <ul>
                                    <li>You don't have to worry about the billing, we will take care of it for you.</li>
                                    <li>There's no risk to you! <b>You will be paid for everty accepted read you submit.</b></li>
                                    <li>Most clients only need one take, but <b>some may ask for multiple takes</b></li>
                                    <li>No music</li>
                                    <li>No SFX</li>
                                    <li>No revisions (we'll pay extra if your clients make changes to the original scripts)</li>
                                    <li>No pickups</li>
                                    <li>No other special editing</li>
                                    <li>No commision fees to us (we will add our margin on top of your rates)</li>
                                    <li>Your rates should be for a full buyout on all projects (we dont pay usage fees)</li>
                                    <li>The "use" of the recorded audio file and market, if any, would be unknown or impossible to determine (considering that we are on a digital platform)</li>
                                    <li><b>You don't have to worry about auditioning</b> (we actually pay extra to audition!)</li>
                                </ul>

                                <div class="form-group {{ $errors->has('project_5000_cost') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-4" for="project_5000_cost">A project of <b>5000</b></label>
                                    <div class="col-sm-8">
                                        <input id="project_5000_cost" type="text" class="form-control" name="project_5000_cost" value="{{ old('project_5000_cost') }}" required>
                                        @if ($errors->has('project_5000_cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_5000_cost') }}</strong>
                                        </span>
                                        @endif
                                    </div>                                   
                                </div>
                                <div class="form-group {{ $errors->has('project_500_cost') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-4" for="project_500_cost">A project of <b>500</b></label>
                                    <div class="col-sm-8">
                                        <input id="project_500_cost" type="text" class="form-control" name="project_500_cost" value="{{ old('project_500_cost') }}" required>
                                        @if ($errors->has('project_500_cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_500_cost') }}</strong>
                                        </span>
                                        @endif
                                    </div>                                    
                                </div>
                                <div class="form-group {{ $errors->has('project_50_cost') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-4" for="project_50_cost">A project of <b>50</b></label>
                                    <div class="col-sm-8">
                                        <input id="project_50_cost" type="text" class="form-control" name="project_50_cost" value="{{ old('project_50_cost') }}" required>
                                        @if ($errors->has('project_50_cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_50_cost') }}</strong>
                                        </span>
                                        @endif
                                    </div>                                   
                                </div>
                                <div class="form-group {{ $errors->has('project_5_cost') ? ' has-error' : '' }}">
                                    <label class="control-label col-sm-4" for="project_5_cost">A project of <b>5</b></label>
                                    <div class="col-sm-8">
                                        <input id="project_5_cost" type="text" class="form-control" name="project_5_cost" value="{{ old('project_5_cost') }}" required>
                                         @if ($errors->has('project_5_cost'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('project_5_cost') }}</strong>
                                        </span>
                                        @endif
                                    </div>                                    
                                </div>                               
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <p class="text-center">
                                    <button class="btn btn-primary btn-sm" type="submit">
                                        CREATE PROFILE
                                    </button>
                                </p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection