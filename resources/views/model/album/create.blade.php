@extends('model.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">               
                <div class="panel-body">   
                    <div class="col-md-12">
                        <h4> <span class="highlighted">1</span>Create a photo album to hold a set of your images</h4>
                        <br />
                    </div>

                    <form action="{{route('modelalbums.store')}}" class="form-horizontal" role="form" method="post" enctype="multipart/form-data" id="submitAudio">
                        {{csrf_field()}}                        
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Title</label>
                            <div class="col-md-8">
                                <input  type="text" name="title" value="{{ old('title') }}" placeholder="Sample title e.g. Photoshoot for XYZ product" class="form-control" required/>
                            </div>
                            @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                        </div>                        

                        <div class="form-group {{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Type of shoot</label>
                            <div class="col-md-8">                                
                                <select name="type" id="type" class="form-control" required> 
                                    <option value="">Select sample type</option>
                                    <option value="TV Commercial" @if(old('type') == 'TV Commercial') selected @endif>TV Commercial</option>
                                    <option value="Product Shoot" @if(old('type') == 'Product Shoot') selected @endif>Product Shoot</option>
                                    <option value="Fashion" @if(old('type') == 'Fashion') selected @endif>Fashion</option>
                                    <option value="Other" @if(old('type') == 'Other') selected @endif>Other</option>
                                </select>
                                @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('about_album') ? ' has-error' : '' }}">
                            <label for="about_album" class="col-md-4 control-label">Tell us a bit about this project</label>
                            <div class="col-md-8">
                                <textarea name="about_album" id="about_album" cols="30" rows="10" class="form-control" required>{{ old('about_album') }}</textarea> 
                                @if ($errors->has('about_album'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('about_album') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h4> <span class="highlighted">2</span>  Upload your photos here</h4>

                            <br />
                        </div>
                        <div class="form-group {{ $errors->has('link') ? ' has-error' : '' }}">
                            <label for="link" class="col-md-4 control-label">Select photos</label>
                            <div class="col-md-8"> 
                                <small><i>You can select more than 1 image</i></small>
                                <div class="input-group">
                                    <label class="input-group-btn">
                                        <span class="btn btn-primary">
                                            Browse&hellip;  <input type="file" name="link[]" style="display: none;" id="link" class="form-control" placeholder='Choose a file...' data-buttonText="Select a File" accept="image/jpg,image/jpeg,image/png" required multiple/>			                                                                                               
                                        </span>
                                    </label>
                                    <input type="text" class="form-control" readonly>
                                </div>                                                             
                                @if ($errors->has('link'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                                               
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-8">  
                                <br />
                                <button class="btn btn-primary btn-md pull-right text-uppercase" id="saveButton" type="submit">
                                    SAVE PHOTOS TO ALBUM
                                </button>                                    
                            </div>
                        </div>
                    </form>
                </div>      

            </div>      
        </div>
    </div>
</div>

<div class="modal fade" id="progressDialog" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3><img src="{{asset('images/preloader.svg')}}" alt="Uploading..." height="20px"/> Please wait upload in progress. </h3>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection
