@extends('member.layouts')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Active Jobs</div>                
                <div class="panel-body">
                    @if(count($active) > 0)
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($active as $job)
                            <tr>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->description }}</td>
                                <td>
                                    <form action="{{route('job.deactivate', ['id'=>$job->id ])}}" method="POST">                                        
                                        {{ csrf_field() }}
                                        <input class="btn btn-warning btn-xs" type="submit" value="Deactivate">
                                    </form>                                    
                                </td>
                                <td>
                                    <form action="{{route('job.destroy', ['id'=>$job->id ])}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                    </form>                                                                       
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                    
                    @else
                        <p class="text-danger">You have no active jobs.</p>
                        <a  class="btn btn-primary btn-sm"href="{{route('job.create')}}">Post a job</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-danger">
                <div class="panel-heading">Inactive Jobs</div>
                <div class="panel-body">
                    @if(count($inactive) > 0)
                    <table class="table table-striped table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>                       
                            @foreach ($inactive as $job)
                            <tr>
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->description }}</td>
                                <td>
                                    <form action="{{route('job.activate', ['id'=>$job->id ])}}" method="POST">                                        
                                        {{ csrf_field() }}
                                        <input class="btn btn-success btn-xs" type="submit" value="Activate">
                                    </form>                                    

                                </td>
                                <td>

                                    <form action="{{route('job.destroy', ['id'=>$job->id ])}}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                    </form>                                                                       
                                </td>
                            </tr>                                             
                            @endforeach
                            @else
                        <p class="text-danger">You have no inactive jobs.</p>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
