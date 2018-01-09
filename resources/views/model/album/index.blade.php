@extends('model.layouts')

@section('content')
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
                                    <h4>{{ $album->title }} - <small class="text-uppercase">{{$album->type}}</small> <sup class="text-uppercase">{{$album->modelpicture()->count()}} Images</sup></h4>
                                    <p>{{ $album->about_album }}</p>
                                    <p>{{ $album->about_sample }}</p>
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

@endsection

