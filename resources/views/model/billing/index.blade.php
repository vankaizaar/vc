@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-success">
                    <div class="panel-body">

                        @if (count($modelbillinginfo) === 1)
                        <h4>Your Billing information</h4>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Shoot</th>
                                    <th>Charge</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 Hour</td>
                                    <td>{{$modelbillinginfo->project_hourly_cost}}</td>
                                </tr>
                                <tr>
                                    <td>Half day</td>
                                    <td>{{$modelbillinginfo->project_half_day_cost}}</td>
                                </tr>
                                <tr>
                                    <td>Full day</td>
                                    <td>{{$modelbillinginfo->project_full_day_cost}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div style="min-height: 1em"></div>
                        <hr />
                        <div style="min-height: 1em"></div>
                        <h4>Update billing here</h4>
                        <form action="{{route('modelbillinginfo.update',['id'=>$modelbillinginfo->id ])}}" class="form-horizontal" role="form" method="POST">
                            {{csrf_field()}}                                                                         
                            {{ method_field('PUT') }}

                            <div class="form-group {{ $errors->has('project_hourly_cost') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-4" for="project_hourly_cost">1 hour shoot</label>
                                <div class="col-sm-8">
                                    <input id="project_hourly_cost" type="text" class="form-control" name="project_hourly_cost" value="{{ $modelbillinginfo->project_hourly_cost }}" required>
                                </div> 
                                @if ($errors->has('project_hourly_cost'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('project_hourly_cost') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('project_half_day_cost') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-4" for="project_half_day_cost">Half day shoot</label>
                                <div class="col-sm-8">
                                    <input id="project_half_day_cost" type="text" class="form-control" name="project_half_day_cost" value="{{ $modelbillinginfo->project_half_day_cost }}" required>
                                </div> 
                                @if ($errors->has('project_half_day_cost'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('project_half_day_cost') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('project_full_day_cost') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-4" for="project_full_day_cost">Full day shoot</label>
                                <div class="col-sm-8">
                                    <input id="project_full_day_cost" type="text" class="form-control" name="project_full_day_cost" value="{{ $modelbillinginfo->project_full_day_cost }}" required>
                                </div> 
                                @if ($errors->has('project_full_day_cost'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('project_full_day_cost') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-4 col-md-offset-8">  
                                    <button class="btn btn-primary btn-sm pull-right" type="submit">
                                        UPDATE BILLING INFO
                                    </button>
                                </div>
                            </div>
                        </form>
                        @else
                        <h4>Update your billing information</h4>
                        <p>How much would you charge us for getting bookings on shoots of the following duration?</p>
                        <br />
                        <form action="{{route('modelbillinginfo.store')}}" class="form-horizontal" role="form" method="POST">
                            {{csrf_field()}}   
                            <div class="form-group {{ $errors->has('project_hourly_cost') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-4" for="project_hourly_cost">1 hour shoot</label>
                                <div class="col-sm-8">
                                    <input id="project_hourly_cost" type="text" class="form-control" name="project_hourly_cost" value="{{ old('project_hourly_cost') }}" required>
                                    @if ($errors->has('project_hourly_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_hourly_cost') }}</strong>
                                    </span>
                                    @endif
                                </div>                                   
                            </div>
                            <div class="form-group {{ $errors->has('project_half_day_cost') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-4" for="project_half_day_cost">Half day shoot</label>
                                <div class="col-sm-8">
                                    <input id="project_half_day_cost" type="text" class="form-control" name="project_half_day_cost" value="{{ old('project_half_day_cost') }}" required>
                                    @if ($errors->has('project_half_day_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_half_day_cost') }}</strong>
                                    </span>
                                    @endif
                                </div>                                   
                            </div>
                            <div class="form-group {{ $errors->has('project_full_day_cost') ? ' has-error' : '' }}">
                                <label class="control-label col-sm-4" for="project_full_day_cost">Full day shoot</label>
                                <div class="col-sm-8">
                                    <input id="project_full_day_cost" type="text" class="form-control" name="project_full_day_cost" value="{{ old('project_full_day_cost') }}" required>
                                    @if ($errors->has('project_full_day_cost'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('project_full_day_cost') }}</strong>
                                    </span>
                                    @endif
                                </div>                                   
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6"></div>
                                <div class="col-sm-6">
                                    <p class="text-center">
                                        <button class="btn btn-primary" type="submit">
                                            CREATE BILLING INFORMATION
                                        </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
