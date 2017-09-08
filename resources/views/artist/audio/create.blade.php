@extends('artist.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">               
                <div class="panel-body">   
                    <div class="col-md-12">
                        <h3> <span class="highlighted">1</span>  Enter details of your submission</h3>
                        <br />
                    </div>

                    <form action="{{route('audio.store')}}" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}                        
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>
                            <div class="col-md-8">
                                <input  type="text" name="title" value="{{ old('title') }}" placeholder="Sample title e.g. Radio Ad for XYZ company" class="form-control" required/>
                            </div>
                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('language') ? ' has-error' : '' }}">
                            <label for="language" class="col-md-4 control-label">Language</label>
                            <div class="col-md-8">                                
                                <select name="language" id="type" class="form-control" required> 
                                    <option value="">Please select language here</option>
                                    <option value="English" @if(old('language') == 'English') selected @endif>English</option>
                                    <option value="Swahili" @if(old('language') == 'Swahili') selected @endif>Swahili</option>
                                    <option value="French" @if(old('language') == 'French') selected @endif>French</option>
                                    <option value="Other" @if(old('language') == 'Other') selected @endif>Other</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('language') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Type of sample</label>
                            <div class="col-md-8">                                
                                <select name="type" id="type" class="form-control" required> 
                                    <option value="">Select sample type</option>
                                    <option value="TV Commercial" @if(old('type') == 'TV Commercial') selected @endif>TV Commercial</option>
                                    <option value="Radio Ad" @if(old('type') == 'Radio Ad') selected @endif>Radio Ad</option>
                                    <option value="Phone Prompt" @if(old('type') == 'Phone Prompt') selected @endif>Phone Prompt</option>
                                    <option value="Other" @if(old('type') == 'Other') selected @endif>Other</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h3> <span class="highlighted">2</span>  Upload your file here</h3>
                            <br />
                        </div>
                        <div class="form-group {{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="link" class="col-md-4 control-label">Select track</label>
                            <div class="col-md-8">
                                <div class="input-group input-file" name="link" id="link" >
                                    <input type="text" class="form-control" placeholder='Choose a file...' accept="audio/*"  />			
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-choose" type="button">Choose</button>
                                    </span>
                                </div>
                                <!--<input type="file" name="link" id="link"  class="form-control" accept="audio/*"/>-->
                                @if ($errors->has('link'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                                @endif

                            </div>

                        </div>
                        <div class="col-md-12">
                            <h3> <span class="highlighted">3</span>Provide more information about this project</h3>
                            <br />
                        </div>
                        <div class="form-group{{ $errors->has('about_sample') ? ' has-error' : '' }}">
                            <label for="about_sample" class="col-md-4 control-label">Tell us a bit about this project</label>
                            <div class="col-md-8">
                                <textarea name="about_sample" id="about_sample" cols="30" rows="10" class="form-control" required>{{ old('about_sample') }}</textarea> 
                                @if ($errors->has('about_sample'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('about_sample') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-8">  
                                <br />
                                <button class="btn btn-primary btn-md pull-right" type="submit">
                                    SAVE TRACK
                                </button>                                    
                            </div>
                        </div>
                    </form>
                </div>      

            </div>      
        </div>
    </div>
</div>
@endsection
