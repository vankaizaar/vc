@extends('member.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <hr />
            <h2>Applications by users </h2>
            <p>These are applications that users have made on the jobs you have posted.</p>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#pending" aria-controls="pending" role="tab" data-toggle="tab"><span class="text-uppercase">Pending Review</span></a></li>
                    <li role="presentation"><a href="#accepted" aria-controls="accepted" role="tab" data-toggle="tab"><span class="text-uppercase">Accepted</span></a></li>
                    <li role="presentation"><a href="#rejected" aria-controls="rejected" role="tab" data-toggle="tab"><span class="text-uppercase">Rejected</span></a></li>                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="pending">
                        <div class="panel panel-warning">
                            <div class="panel-heading"></div>
                            <div class="panel-body">     
                                @if(count($applications) > 0)
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Artist</th>
                                            <th>Applied</th>                                
                                            <th>Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applications as $application)
                                        <tr>
                                            <td>{{ $application->id }}</td>
                                            <td>{{ $application->job->title }}</td>
                                            <td>{{ $application->artist->name }}</td>
                                            <td>{{$application->created_at->diffForHumans()}}</td>
                                            <td>
                                                <form action="{{route('applications.accept', ['application'=>$application->id ])}}" method="POST">
                                                    {{ method_field('PATCH') }}
                                                    {{ csrf_field() }}
                                                    <input class="btn btn-success btn-xs" type="submit" value="Accept">
                                                </form>                                                                       
                                            </td>

                                            <td>
                                                <form action="{{route('applications.reject', ['application'=>$application->id ])}}" method="POST">
                                                    {{ method_field('PATCH') }}
                                                    {{ csrf_field() }}
                                                    <input class="btn btn-warning btn-xs" type="submit" value="Reject">
                                                </form>                                                                       
                                            </td>
                                        </tr>
                                        @endforeach                                                                              
                                    </tbody>
                                </table>
                                @else
                                <span class="text-danger">You have no job applications pending review.</span>                                                                                
                                @endif
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="accepted">
                        <div class="panel panel-success">
                            <div class="panel-heading"></div>
                            <div class="panel-body">   
                                @if(count($applicationsAccepted) > 0)
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Artist</th>
                                            <th>Applied</th>                                                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicationsAccepted as $accepted)
                                        <tr>
                                            <td>{{ $accepted->id }}</td>
                                            <td>{{ $accepted->job->title }}</td>
                                            <td>{{ $accepted->artist->name }}</td>
                                            <td>{{ $accepted->updated_at->diffForHumans()}}</td>
                                        </tr>
                                        @endforeach                                     
                                    </tbody>
                                </table>
                                @else
                                    <span class="text-danger">You have no accepted job applications.</span>                                    
                                @endif
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="rejected">
                        <div class="panel panel-danger">
                            <div class="panel-heading"></div>
                            <div class="panel-body"> 
                                @if(count($applicationsRejected) > 0)
                                <table class="table table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Job Title</th>
                                            <th>Artist</th>
                                            <th>Applied</th>                                
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicationsRejected as $rejected)
                                        <tr>
                                            <td>{{ $rejected->id }}</td>
                                            <td>{{ $rejected->job->title }}</td>
                                            <td>{{ $rejected->artist->name }}</td>
                                            <td>{{ $rejected->updated_at->diffForHumans()}}</td>
                                        </tr>                                        
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <span class="text-danger">You have no rejected job applications.</span>                                    
                                @endif
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <hr />  
            <h2>Hires</h2>
            <p>These are jobs that you have hired a preferred artist.</p>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#hirePending" aria-controls="hirePending" role="tab" data-toggle="tab"><span class="text-uppercase">Pending Review</span></a></li>
                    <li role="presentation"><a href="#hireAccepted" aria-controls="hireAccepted" role="tab" data-toggle="tab"><span class="text-uppercase">Accepted</span></a></li>
                    <li role="presentation"><a href="#hireRejected" aria-controls="hireRejected" role="tab" data-toggle="tab"><span class="text-uppercase">Rejected</span></a></li>                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="hirePending">
                        <div class="panel panel-warning">
                            <div class="panel-heading"></div>
                            <div class="panel-body">    
                               
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="hireAccepted">
                        <div class="panel panel-success">
                            <div class="panel-heading"></div>
                            <div class="panel-body">                    
                               
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="hireRejected">
                        <div class="panel panel-danger">
                            <div class="panel-heading"></div>
                            <div class="panel-body">                    
                               
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            <hr />
        </div>
    </div>
</div>
@endsection