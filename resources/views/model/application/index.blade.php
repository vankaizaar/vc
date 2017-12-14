@extends('artist.layouts')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading">JOB APPLICATIONS UNDER REVIEW</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Applied</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($applications as $application)
                            <tr>
                                <td>{{ $application->id }}</td>
                                <td>{{ $application->job->title }}</td>
                                <td>{{$application->created_at->diffForHumans()}}</td>
                                <td>
                                    <form action="{{route('application.destroy', ['id'=>$application->id ])}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input class="btn btn-danger btn-xs" type="submit" value="Delete Application">
                                    </form>                                                                       
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <span class="text-danger">You have no active jobs.</span>
                                    <br />
                                    <a  class="btn btn-primary btn-sm"href="{{route('jobs.search')}}">Apply Now</a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <hr />
            <div class="panel panel-success">
                <div class="panel-heading">ACCEPTED JOBS</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Accepted</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($applicationsAccepted as $accepted)
                            <tr>
                                <td>{{ $accepted->id }}</td>
                                <td>{{ $accepted->job->title }}</td>
                                <td>{{ $accepted->updated_at->diffForHumans()}}</td>
                                
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <span class="text-danger">You have no active jobs.</span>                                    
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <hr />
             <div class="panel panel-danger">
                <div class="panel-heading">REJECTED APPLICATIONS</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Job Title</th>
                                <th>Rejected</th>
                               
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($applicationsRejected as $rejected)
                            <tr>
                                <td>{{ $rejected->id }}</td>
                                <td>{{ $rejected->job->title }}</td>
                                <td>{{ $rejected->updated_at->diffForHumans()}}</td>
                                
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">
                                    <span class="text-danger">You have no rejected applications.</span>                                    
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection