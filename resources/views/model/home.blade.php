@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">               
                    <div class="panel-body">
                        <h3>Welcome back {{ Auth::guard('web_model')->user()->name }}</h3>                  
                    </div>
                </div>
                <!--            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="dash-widget well well-sm">
                                        <div class="icon">
                                            <i class="glyphicon glyphicon-edit text-primary"></i>
                                        </div>
                                        <div class="text">
                                            <var>1/10</var>
                                            <label class="text-primary">Samples Uploaded</label>
                                        </div>
                                        <div class="options">
                                            <a href="#" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i> Add an article</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="dash-widget well well-sm">
                                        <div class="icon">
                                            <i class="glyphicon glyphicon-check text-success"></i>
                                        </div>
                                        <div class="text">
                                            <var>90/100</var>
                                            <label class="text-success">publications online</label>
                                        </div>
                                        <div class="options">
                                            <a href="#" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-search"></i> Find offline</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="dash-widget well well-sm">
                                        <div class="icon">
                                            <i class="glyphicon glyphicon-check text-success"></i>
                                        </div>
                                        <div class="text">
                                            <var>90/100</var>
                                            <label class="text-success">publications online</label>
                                        </div>
                                        <div class="options">
                                            <a href="#" class="btn btn-primary btn-md"><i class="glyphicon glyphicon-search"></i> Find offline</a>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                <div class="row">
                    <div class="col-md-12">
                        <div id="outer">
                            <div class="itemwrapper">
                                <a href="{{route('modelalbums.index')}}"><img src="{{asset('images/browse-through-your-samples.jpg')}}" alt="Browse through your samples" class="img-responsive" /></a>
                            </div>
                            <div class="itemwrapper">
                                <a href="{{route('modelalbums.create')}}"><img src="{{asset('images/upload-a-voice-sample-now.jpg')}}" alt="Upload a voice sample now" class="img-responsive" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection