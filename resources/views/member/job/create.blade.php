@extends('member.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">CREATE JOB</div>
                <div class="panel-body">                                                                  
                    <form action="{{route('job.store')}}" class="form-horizontal" method="post">
                        {{csrf_field()}}                                                
                        <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input  type="text" name="title" value="" class="form-control" required/>
                                @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description</label>
                            <div class="col-md-6">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control" required></textarea> 
                                @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('script') ? ' has-error' : '' }}">
                            <label for="script" class="col-md-4 control-label">Script</label>
                            <div class="col-md-6">
                                <textarea name="script" id="description" cols="30" rows="10" class="form-control" required></textarea> 
                                @if ($errors->has('script'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('script') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('delivery') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">
                                Type of Delivery 

                            </label>                            
                            <div class="col-md-6">
                                <input  type="text" name="delivery" id="delivery" value="" class="form-control" required/>
                                @if ($errors->has('delivery'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('delivery') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('length') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Length</label>
                            <div class="col-md-6">                                
                                <select name="length" id="length" required class="form-control">
                                    <option>Please select the duration of the voiceover</option>
                                    <option value="5">5 seconds</option>
                                    <option value="10">10 seconds</option>
                                    <option value="15">15 seconds</option>
                                    <option value="20">20 seconds</option>
                                    <option value="30">30 seconds</option>
                                    <option value="45">45 seconds</option>
                                </select>
                                @if ($errors->has('length'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('length') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('due_date') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Due Date</label>
                            <div class="col-md-6">
                                <input data-provide="datepicker" id="due_date" type="text" class="form-control datepicker" name="due_date" value="" required autofocus>
                                @if ($errors->has('due_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('due_date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-6">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    SAVE JOB
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
