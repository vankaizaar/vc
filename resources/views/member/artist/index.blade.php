@extends('member.layouts')
@section('content')
<div class="container">

    <hr />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Find artists</h2>
            <form id="searchJobs">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="searchartisttitle" name="name" placeholder="Search Artists" >                        
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
            <div id="artists-listing">
                <h3>Artists: {{$artists->total()}} Found</h3>

                @foreach ($artists as $artist)

                <?php $desc = $artist->profile->about; ?>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-3">	
                            <img class="img-responsive" src="{{Storage::url($artist->avatar->link)}}" alt="{{ $artist->name }}'s avatar" width="130px"/>
                        </div>
                        <div class="col-md-9">	
                            <h4 class="media-heading">{{ $artist->name }}</h4>
                            <p>{{ str_limit($desc, $limit = 150, $end = '...') }}</p>
                            <div class="row">
                                <div class="col-sm-6">
                                    <small>Member since <span class="text-info">{{$artist->created_at->diffForHumans(null,True)}}</span></small>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('artists.show',['artist'=>$artist->id ])}}" class="btn btn-sm btn-info">VIEW PROFILE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr />                    
                @endforeach



                {{ $artists->links() }}           
            </div>
        </div>
    </div>
</div>
@endsection


