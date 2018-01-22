@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">                
                    <div class="panel-body">
                        <h3>Lets get to know you</h3>
                        <form action="{{route('modelprofile.store')}}" class="form-horizontal" role="form" method="POST">
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

                            <div class="form-group {{ $errors->has('height') ? ' has-error' : '' }}">
                                <label for="height" class="col-md-4 control-label">Height</label>
                                <div class="col-md-8">
                                    <select name="height" id="height" class="form-control" required>                                    
                                        <optgroup label="Select height">                                         
                                            <option value="4.0" @if(old('height') == '4.0') selected @endif>4&rsquo;</option>
                                            <option value="4.1" @if(old('height') == '4.1') selected @endif>4&rsquo;&nbsp;1&rdquo;</option>
                                            <option value="4.2" @if(old('height') == '4.2') selected @endif>4&rsquo;&nbsp;2&rdquo;</option>
                                            <option value="4.3" @if(old('height') == '4.3') selected @endif>4&rsquo;&nbsp;3&rdquo;</option>
                                            <option value="4.4" @if(old('height') == '4.4') selected @endif>4&rsquo;&nbsp;4&rdquo;</option>
                                            <option value="4.5" @if(old('height') == '4.5') selected @endif>4&rsquo;&nbsp;5&rdquo;</option>
                                            <option value="4.6" @if(old('height') == '4.6') selected @endif>4&rsquo;&nbsp;6&rdquo;</option>
                                            <option value="4.7" @if(old('height') == '4.7') selected @endif>4&rsquo;&nbsp;7&rdquo;</option>
                                            <option value="4.8" @if(old('height') == '4.8') selected @endif>4&rsquo;&nbsp;8&rdquo;</option>
                                            <option value="4.9" @if(old('height') == '4.9') selected @endif>4&rsquo;&nbsp;9&rdquo;</option>
                                            <option value="4.10" @if(old('height') == '4.10') selected @endif>4&rsquo;&nbsp;10&rdquo;</option>
                                            <option value="4.11" @if(old('height') == '4.11') selected @endif>4&rsquo;&nbsp;11&rdquo;</option>
                                        </optgroup>
                                        <optgroup label="5&rsquo;">
                                            <option value="5.0" @if(old('height') == '5.0') selected @endif>5&rsquo;</option>
                                            <option value="5.1" @if(old('height') == '5.1') selected @endif>5&rsquo;&nbsp;1&rdquo;</option>
                                            <option value="5.2" @if(old('height') == '5.2') selected @endif>5&rsquo;&nbsp;2&rdquo;</option>
                                            <option value="5.3" @if(old('height') == '5.3') selected @endif>5&rsquo;&nbsp;3&rdquo;</option>
                                            <option value="5.4" @if(old('height') == '5.4') selected @endif>5&rsquo;&nbsp;4&rdquo;</option>
                                            <option value="5.5" @if(old('height') == '5.5') selected @endif>5&rsquo;&nbsp;5&rdquo;</option>
                                            <option value="5.6" @if(old('height') == '5.6') selected @endif>5&rsquo;&nbsp;6&rdquo;</option>
                                            <option value="5.7" @if(old('height') == '5.7') selected @endif>5&rsquo;&nbsp;7&rdquo;</option>
                                            <option value="5.8" @if(old('height') == '5.8') selected @endif>5&rsquo;&nbsp;8&rdquo;</option>
                                            <option value="5.9" @if(old('height') == '5.9') selected @endif>5&rsquo;&nbsp;9&rdquo;</option>
                                            <option value="5.10" @if(old('height') == '5.10') selected @endif>5&rsquo;&nbsp;10&rdquo;</option>
                                            <option value="5.11" @if(old('height') == '5.11') selected @endif>5&rsquo;&nbsp;11&rdquo;</option>
                                        </optgroup>
                                        <optgroup label="6&rsquo;">
                                            <option value="6.0" @if(old('height') == '6.0') selected @endif>6&rsquo;</option>
                                            <option value="6.1" @if(old('height') == '6.1') selected @endif>6&rsquo;&nbsp;1&rdquo;</option>
                                            <option value="6.2" @if(old('height') == '6.2') selected @endif>6&rsquo;&nbsp;2&rdquo;</option>
                                            <option value="6.3" @if(old('height') == '6.3') selected @endif>6&rsquo;&nbsp;3&rdquo;</option>
                                            <option value="6.4" @if(old('height') == '6.4') selected @endif>6&rsquo;&nbsp;4&rdquo;</option>
                                            <option value="6.5" @if(old('height') == '6.5') selected @endif>6&rsquo;&nbsp;5&rdquo;</option>
                                            <option value="6.6" @if(old('height') == '6.6') selected @endif>6&rsquo;&nbsp;6&rdquo;</option>
                                            <option value="6.7" @if(old('height') == '6.7') selected @endif>6&rsquo;&nbsp;7&rdquo;</option>
                                            <option value="6.8" @if(old('height') == '6.8') selected @endif>6&rsquo;&nbsp;8&rdquo;</option>
                                            <option value="6.9" @if(old('height') == '6.9') selected @endif>6&rsquo;&nbsp;9&rdquo;</option>
                                            <option value="6.10" @if(old('height') == '6.10') selected @endif>6&rsquo;&nbsp;10&rdquo;</option>
                                            <option value="6.11" @if(old('height') == '6.11') selected @endif>6&rsquo;&nbsp;11&rdquo;</option>
                                        </optgroup>
                                        <optgroup label="7&rsquo;">
                                            <option value="7.0" @if(old('height') == '7.0') selected @endif>7&rsquo;</option>
                                            <option value="7.1" @if(old('height') == '7.1') selected @endif>7&rsquo;&nbsp;1&rdquo;</option>
                                            <option value="7.2" @if(old('height') == '7.2') selected @endif>7&rsquo;&nbsp;2&rdquo;</option>
                                            <option value="7.3" @if(old('height') == '7.3') selected @endif>7&rsquo;&nbsp;3&rdquo;</option>
                                            <option value="7.4" @if(old('height') == '7.4') selected @endif>7&rsquo;&nbsp;4&rdquo;</option>
                                            <option value="7.5" @if(old('height') == '7.5') selected @endif>7&rsquo;&nbsp;5&rdquo;</option>
                                            <option value="7.6" @if(old('height') == '7.6') selected @endif>7&rsquo;&nbsp;6&rdquo;</option>
                                            <option value="7.7" @if(old('height') == '7.7') selected @endif>7&rsquo;&nbsp;7&rdquo;</option>
                                            <option value="7.8" @if(old('height') == '7.8') selected @endif>7&rsquo;&nbsp;8&rdquo;</option>
                                            <option value="7.9" @if(old('height') == '7.9') selected @endif>7&rsquo;&nbsp;9&rdquo;</option>
                                            <option value="7.10" @if(old('height') == '7.10') selected @endif>7&rsquo;&nbsp;10&rdquo;</option>
                                            <option value="7.11" @if(old('height') == '7.11') selected @endif>7&rsquo;&nbsp;11&rdquo;</option>
                                        </optgroup>
                                    </select>
                                    @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="weight" class="col-md-4 control-label">Weight</label>
                                <div class="col-md-8">
                                    <input id="weight" type="text" class="form-control" name="weight" value="{{ old('weight') }}" placeholder="Weight in kgs" required autofocus>
                                    @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
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

                            <div class="form-group{{ $errors->has('model_categories') ? ' has-error' : '' }}">
                                <label for="model_categories" class="col-md-4 control-label">What modeling categories can you execute really well?</label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="tooltip here" name="model_categories[]" value="Fashion Model" @if(is_array(old('model_categories')) && in_array('Fashion Model', old('model_categories'))) checked @endif>Fashion Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models are the ones you find in the editorial spreads of pages like Elle, Vogue, Glamour, etc." name="model_categories[]" value="Editorial Fashion Model" @if(is_array(old('model_categories')) && in_array('Editorial Fashion Model', old('model_categories'))) checked @endif>Editorial Fashion Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models are the ones you see in the clothing catalogs, posing in a variety of outfits." name="model_categories[]" value="Fashion Catalog Model" @if(is_array(old('model_categories')) && in_array('Fashion Catalog Model', old('model_categories'))) checked @endif>Fashion Catalog Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models walk the catwalk or runway." name="model_categories[]" value="Runway Model" @if(is_array(old('model_categories')) && in_array('Runway Model', old('model_categories'))) checked @endif>Runway Model</label>                                    
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models are used for many different types of publications, such as: magazines, print advertisements, billboards, posters, calendars, campaigns, booklets, flyers, banners." name="model_categories[]" value="Print Model" @if(is_array(old('model_categories')) && in_array('Print Model', old('model_categories'))) checked @endif>Print Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="Glamour modeling focuses much more on the model’s appeal, beauty, and body than it does anything else." name="model_categories[]" value="Glamour Model" @if(is_array(old('model_categories')) && in_array('Glamour Model', old('model_categories'))) checked @endif>Glamour Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="This is a model that is hired to represent a brand, product, or service." name="model_categories[]" value="Promotional Model" @if(is_array(old('model_categories')) && in_array('Promotional Model', old('model_categories'))) checked @endif>Promotional Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="A catalog model has the same job description as a “fashion catalog model”, yet none of the same size requirements." name="model_categories[]" value="Catalog Model" @if(is_array(old('model_categories')) && in_array('Catalog Model', old('model_categories'))) checked @endif>Catalog Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="Fitness models are toned, in-shape, healthy, and have good muscle tone. " name="model_categories[]" value="Fitness Model" @if(is_array(old('model_categories')) && in_array('Fitness Model', old('model_categories'))) checked @endif>Fitness Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models typically model their “parts”, such as their hands, legs, feet, stomach, etc." name="model_categories[]" value="Parts Model" @if(is_array(old('model_categories')) && in_array('Parts Model', old('model_categories'))) checked @endif>Parts Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="Art models work with visual artists. The model is the subject of the intended art piece, usually being required to pose while the artist interprets and creates a piece of art." name="model_categories[]" value="Art Model" @if(is_array(old('model_categories')) && in_array('Art Model', old('model_categories'))) checked @endif>Art Model</label>
                                    </div>

                                    @if ($errors->has('model_categories'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model_categories') }}</strong>
                                    </span>
                                    @endif
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
</div>
@endsection