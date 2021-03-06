@extends('member.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">UPLOAD COVER PHOTO</div>
                <div class="panel-body">                                                                  
                    <form action="{{route('membercover.store')}}" id="avatar" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}                                               
                        <div class="form-group">
                            <label class="btn btn-default btn-file">
                                <span>Select cover photo</span> <input type="file" name="link" id="link" accept="image/*" style="display: none;"/>
                            </label>
                            @if ($errors->has('link'))
                            <span class="help-block">
                                <strong>{{ $errors->first('link') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">                            
                            <button class="btn btn-primary btn-sm" type="submit">
                                UPDATE COVER PHOTO
                            </button>                            
                        </div>
                    </form>
                </div>      

            </div>      
        </div>
    </div>
</div>
@endsection
