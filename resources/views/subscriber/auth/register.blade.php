@extends('artist.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">                
                <div class="panel-body">
                    <div class="col-md-6 col-md-offset-4">
                        <h3>Pre-register for a different talent category</h3>
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/subscribers') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name') }}"  autofocus>

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">                                
                                <select name="category" id="category" class="form-control" > 
                                    <option>Select your talent category</option>
                                    <option value="Coding & Tech" @if(old('category') == 'Coding & Tech') selected @endif>Coding & Tech</option>
                                    <option value="Design" @if(old('category') == 'Design') selected @endif>Design</option>
                                    <option value="Digital Media Buy" @if(old('category') == 'Digital Media Buy') selected @endif>Digital Media Buy</option>
                                    <option value="Makeup" @if(old('category') == 'Makeup') selected @endif>Makeup</option>
                                    <option value="Modelling" @if(old('category') == 'Modelling') selected @endif>Modelling</option>
                                    <option value="Motion Graphics" @if(old('category') == 'Motion Graphics') selected @endif>Motion Graphics</option>
                                    <option value="Photography" @if(old('category') == 'Photography') selected @endif>Photography</option>
                                    <option value="Script Writing" @if(old('category') == 'Script Writing') selected @endif>Script Writing</option>
                                    <option value="Strategy" @if(old('category') == 'Strategy') selected @endif>Strategy</option>                                    
                                </select>
                                @if ($errors->has('category'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('category') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary text-uppercase">
                                    Preregister today
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