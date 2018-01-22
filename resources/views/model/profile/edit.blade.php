@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <h2><span class="highlighted">1</span> Update personal information</h2>
                        <form action="{{route('modelprofile.update',['id'=>$modelprofile->id ])}}" class="form-horizontal" role="form" method="POST">
                            {{csrf_field()}}                                                                         
                            {{ method_field('PUT') }}
                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="col-md-4 control-label">Gender</label>
                                <div class="col-md-6">       

                                    <select name="gender" id="gender" class="form-control" required> 
                                        <option value="" {{ ($modelprofile->gender === NULL) ? 'selected' :''}}>Select gender</option>
                                        <option value="1" {{ ($modelprofile->gender === 1) ? 'selected' :''}}>Male</option>
                                        <option value="0" {{ ($modelprofile->gender === 0) ? 'selected' :''}}>Female</option>
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
                                    <input id="dob" type="text" class="form-control datepicker" name="dob" value="{{ date('y-m-d',strtotime($modelprofile->dob)) }}" required>
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
                                    <input id="telephone" type="text" class="form-control" name="telephone" value="{{ $modelprofile->telephone }}" required autofocus>
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
                                    <input id="country" type="text" class="form-control" name="country" value="{{ $modelprofile->country }}" required autofocus>
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
                                    <input id="city" type="text" class="form-control" name="city" value="{{ $modelprofile->city }}" required autofocus>
                                    @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                                <label for="height" class="col-md-4 control-label">Height</label>
                                <div class="col-md-6">                                
                                    <select name="height" id="height" class="form-control" required>                                     
                                        <option value="">Select height</option>              
                                        <option value="4.0" {{ ($modelprofile->height === '4.0') ? 'selected' :''}}>4'</option>
                                        <option value="4.1" {{ ($modelprofile->height === '4.1') ? 'selected' :''}}>4'1"</option>
                                        <option value="4.2" {{ ($modelprofile->height === '4.2') ? 'selected' :''}}>4'2"</option>
                                        <option value="4.3" {{ ($modelprofile->height === '4.3') ? 'selected' :''}}>4'3"</option>
                                        <option value="4.4" {{ ($modelprofile->height === '4.4') ? 'selected' :''}}>4'4"</option>
                                        <option value="4.5" {{ ($modelprofile->height === '4.5') ? 'selected' :''}}>4'5"</option>
                                        <option value="4.6" {{ ($modelprofile->height === '4.6') ? 'selected' :''}}>4'6"</option>
                                        <option value="4.7" {{ ($modelprofile->height === '4.7') ? 'selected' :''}}>4'7"</option>
                                        <option value="4.8" {{ ($modelprofile->height === '4.8') ? 'selected' :''}}>4'8"</option>
                                        <option value="4.9" {{ ($modelprofile->height === '4.9') ? 'selected' :''}}>4'9"</option>
                                        <option value="4.10" {{ ($modelprofile->height === '4.10') ? 'selected' :''}}>4'10"</option>
                                        <option value="4.11" {{ ($modelprofile->height === '4.11') ? 'selected' :''}}>4'11"</option>


                                        <option value="5.0" {{ ($modelprofile->height === '5.0') ? 'selected' :''}}>5'</option>
                                        <option value="5.1" {{ ($modelprofile->height === '5.1') ? 'selected' :''}}>5'1"</option>
                                        <option value="5.2" {{ ($modelprofile->height === '5.2') ? 'selected' :''}}>5'2"</option>
                                        <option value="5.3" {{ ($modelprofile->height === '5.3') ? 'selected' :''}}>5'3"</option>
                                        <option value="5.4" {{ ($modelprofile->height === '5.4') ? 'selected' :''}}>5'4"</option>
                                        <option value="5.5" {{ ($modelprofile->height === '5.5') ? 'selected' :''}}>5'5"</option>
                                        <option value="5.6" {{ ($modelprofile->height === '5.6') ? 'selected' :''}}>5'6"</option>
                                        <option value="5.7" {{ ($modelprofile->height === '5.7') ? 'selected' :''}}>5'7"</option>
                                        <option value="5.8" {{ ($modelprofile->height === '5.8') ? 'selected' :''}}>5'8"</option>
                                        <option value="5.9" {{ ($modelprofile->height === '5.9') ? 'selected' :''}}>5'9"</option>
                                        <option value="5.10" {{ ($modelprofile->height === '5.10') ? 'selected' :''}}>5'10"</option>
                                        <option value="5.11" {{ ($modelprofile->height === '5.11') ? 'selected' :''}}>5'11"</option>

                                        <option value="6.0" {{ ($modelprofile->height === '6.0') ? 'selected' :''}}>6'</option>
                                        <option value="6.1" {{ ($modelprofile->height === '6.1') ? 'selected' :''}}>6'1"</option>
                                        <option value="6.2" {{ ($modelprofile->height === '6.2') ? 'selected' :''}}>6'2"</option>
                                        <option value="6.3" {{ ($modelprofile->height === '6.3') ? 'selected' :''}}>6'3"</option>
                                        <option value="6.4" {{ ($modelprofile->height === '6.4') ? 'selected' :''}}>6'4"</option>
                                        <option value="6.5" {{ ($modelprofile->height === '6.5') ? 'selected' :''}}>6'5"</option>
                                        <option value="6.6" {{ ($modelprofile->height === '6.6') ? 'selected' :''}}>6'6"</option>
                                        <option value="6.7" {{ ($modelprofile->height === '6.7') ? 'selected' :''}}>6'7"</option>
                                        <option value="6.8" {{ ($modelprofile->height === '6.8') ? 'selected' :''}}>6'8"</option>
                                        <option value="6.9" {{ ($modelprofile->height === '6.9') ? 'selected' :''}}>6'9"</option>
                                        <option value="6.10" {{ ($modelprofile->height === '6.10') ? 'selected' :''}}>6'10"</option>
                                        <option value="6.11" {{ ($modelprofile->height === '6.11') ? 'selected' :''}}>6'11"</option>

                                        <option value="7.0" {{ ($modelprofile->height === '7.0') ? 'selected' :''}}>7'</option>
                                        <option value="7.1" {{ ($modelprofile->height === '7.1') ? 'selected' :''}}>7'1"</option>
                                        <option value="7.2" {{ ($modelprofile->height === '7.2') ? 'selected' :''}}>7'2"</option>
                                        <option value="7.3" {{ ($modelprofile->height === '7.3') ? 'selected' :''}}>7'3"</option>
                                        <option value="7.4" {{ ($modelprofile->height === '7.4') ? 'selected' :''}}>7'4"</option>
                                        <option value="7.5" {{ ($modelprofile->height === '7.5') ? 'selected' :''}}>7'5"</option>
                                        <option value="7.6" {{ ($modelprofile->height === '7.6') ? 'selected' :''}}>7'6"</option>
                                        <option value="7.7" {{ ($modelprofile->height === '7.7') ? 'selected' :''}}>7'7"</option>
                                        <option value="7.8" {{ ($modelprofile->height === '7.8') ? 'selected' :''}}>7'8"</option>
                                        <option value="7.9" {{ ($modelprofile->height === '7.9') ? 'selected' :''}}>7'9"</option>
                                        <option value="7.10" {{ ($modelprofile->height === '7.10') ? 'selected' :''}}>7'10"</option>
                                        <option value="7.11" {{ ($modelprofile->height === '7.11') ? 'selected' :''}}>7'11"</option>

                                    </select>
                                    @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">Weight</label>
                                <div class="col-md-6">
                                    <input id="weight" type="text" class="form-control" name="weight" value="{{ $modelprofile->weight }}" required autofocus>
                                    @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                                <label for="about" class="col-md-4 control-label">Tell us a bit about yourself</label>
                                <div class="col-md-6">
                                    <textarea name="about" id="about" cols="30" rows="10" class="form-control" required>{{ $modelprofile->about }}</textarea> 
                                    @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>                       

                            <div class="form-group{{ $errors->has('model_categories') ? ' has-error' : '' }}">
                                <label for="model_categories" class="col-md-4 control-label">What voice genders and ages can you execute really well?</label>
                                <div class="col-md-8">
                                    <div class="checkbox">                                      
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="tooltip here" name="model_categories[]" value="Fashion Model" {{ in_array("Fashion Model", $modelprofile->model_categories) ? "checked" : "" }}>Fashion Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models are the ones you find in the editorial spreads of pages like Elle, Vogue, Glamour, etc." name="model_categories[]" value="Editorial Fashion Model" {{ in_array("Editorial Fashion Model", $modelprofile->model_categories) ? "checked" : "" }}>Editorial Fashion Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models are the ones you see in the clothing catalogs, posing in a variety of outfits." name="model_categories[]" value="Fashion Catalog Model" {{ in_array("Fashion Catalog Model", $modelprofile->model_categories) ? "checked" : "" }}>Fashion Catalog Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models walk the catwalk or runway." name="model_categories[]" value="Runway Model" {{ in_array("Runway Model", $modelprofile->model_categories) ? "checked" : "" }}>Runway Model</label>                                    
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models are used for many different types of publications, such as: magazines, print advertisements, billboards, posters, calendars, campaigns, booklets, flyers, banners." name="model_categories[]" value="Print Model" {{ in_array("Print Model", $modelprofile->model_categories) ? "checked" : "" }}>Print Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="Glamour modeling focuses much more on the model’s appeal, beauty, and body than it does anything else." name="model_categories[]" value="Glamour Model" {{ in_array("Glamour Model", $modelprofile->model_categories) ? "checked" : "" }}>Glamour Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="This is a model that is hired to represent a brand, product, or service." name="model_categories[]" value="Promotional Model" {{ in_array("Promotional Model", $modelprofile->model_categories) ? "checked" : "" }}>Promotional Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="A catalog model has the same job description as a “fashion catalog model”, yet none of the same size requirements." name="model_categories[]" value="Catalog Model" {{ in_array("Catalog Model", $modelprofile->model_categories) ? "checked" : "" }}>Catalog Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="Fitness models are toned, in-shape, healthy, and have good muscle tone. " name="model_categories[]" value="Fitness Model" {{ in_array("Fitness Model", $modelprofile->model_categories) ? "checked" : "" }}>Fitness Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="These models typically model their “parts”, such as their hands, legs, feet, stomach, etc." name="model_categories[]" value="Parts Model" {{ in_array("Parts Model", $modelprofile->model_categories) ? "checked" : "" }}>Parts Model</label>
                                        <label class="checkbox"><input type="checkbox" data-toggle='tooltip' data-placement='left' data-original-title="Art models work with visual artists. The model is the subject of the intended art piece, usually being required to pose while the artist interprets and creates a piece of art." name="model_categories[]" value="Art Model" {{ in_array("Art Model", $modelprofile->model_categories) ? "checked" : "" }}>Art Model</label>
                                    </div>

                                    @if ($errors->has('model_categories'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model_categories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>                        
                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-8">  
                                    <button class="btn btn-primary btn-sm pull-right" type="submit">
                                        UPDATE PROFILE
                                    </button>
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