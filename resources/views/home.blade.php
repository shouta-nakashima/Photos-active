@extends('layouts.app')

@section('content')

<div class="container">
<h4>Album’s</h4>
    <div class="row justify-content-center">
    @foreach($albums as $album)
    <div class="card" style="width: 18rem;">
        <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="{{ $album->albumimage }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect width="100%" height="100%" fill="#868e96"/></img>
        
        <a href="{{ route('album.show', ['id'=>$album->id]) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Show Album</a>
        
    </div>
    @endforeach
    </div>
</div>
@endsection
