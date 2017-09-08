@extends('artist.layouts')
@section('content')
<div class="container">
    
    <hr />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Find jobs</h2>
            <form id="searchJobs">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="searchjobtitle" name="title" placeholder="Search Jobs" >                        
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-default pull-right">SEARCH</button>
                    </div>
                </div>                
            </form>
            <h2></h2>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div id="jobs-listing">
                <h4>{{$jobs->total()}} Jobs Found</h4>
                <div class="list-group">
                    @foreach ($jobs as $job)
                    <?php $desc = $job->description; ?>
                    <a href="{{route('jobs.show',['job'=>$job->id ])}}" class="list-group-item">
                        <h2 class="list-group-item-heading">{{ $job->title }} <small class="text-warning">{{$job->created_at->diffForHumans()}}</small></h2>
                        <p class="list-group-item-text">{{ str_limit($desc, $limit = 150, $end = '...') }}</p>                    
                    </a>    
                    <hr />
                    @endforeach
                </div>
                {{ $jobs->links() }}           
            </div>
        </div>
    </div>
</div>
@endsection


