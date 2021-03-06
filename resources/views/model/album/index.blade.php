@extends('main-layout')
@section('content')
<div class="artist-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">               
                    <div class="panel-body">
                        <h3>Your images</h3>
                        <table class="table table-striped table-hover ">
                            <thead>
                                <tr>
                                    <th>Album</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($modeluser->modelalbum as $album)
                                <tr>
                                    <td> 
                                        <h4 style="margin-bottom:0.2em !important;">{{ $album->title }}</h4>
                                        <span class="label label-sm label-info">{{$album->type}}</span> <span class="label label-sm label-info text-capitalize">{{$album->modelpicture()->count()}} Images</span>                                                                                                            
                                        <p><small>{{ $album->about_album }}</small></p>
                                        <hr />                                    
                                        <div class="grid">                                        
                                            @foreach ( $album->modelpicture as $picture )
                                            <div class="grid-item">
                                                <a class="chocolat-image" rel="gallery1" href="{{Storage::url($picture->link)}}" title="{{ $album->title }} - {{ $album->about_album }}">
                                                    <img src="{{Storage::url($picture->link)}}" alt="{{$modeluser->name}}" />
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{route('modelalbums.destroy', ['id'=>$album->id ])}}" method="POST">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <input class="btn btn-primary btn-md text-uppercase" type="submit" value="Delete">
                                        </form>                                       
                                    </td>
                                </tr>
                                @empty
                            <p class="text-danger">You don't have any albums.</p>
                            <a  class="btn btn-primary btn-sm text-uppercase"href="{{route('modelalbums.create')}}">Start creating your portfolio</a>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

