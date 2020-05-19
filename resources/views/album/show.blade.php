@extends('layouts.app')

@section('content')
<div class="container">
<h4>{{ $album->title}}</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="{{ $album->albumimage }}"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" ></text></svg>
                    <div class="card-body">
                        <p class="card-text">{{ $album->text}}</p>
                      
                        <a class="btn btn-outline-success" href="/photo/create/{{ $album->id }}" >Add To Photo</a>
                        <a class="btn btn-outline-secondary" href="{{ route('home') }}" >Back To Home</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <h4>Photo’s</h4>
    <div class="row justify-content-center">
    @foreach($album->photos as $photo)
    <div class="card" style="width: 18rem;">
        <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="{{ $photo->photoimage }}" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" ><rect width="100%" height="100%" fill="#868e96"/></img>
        
        <a href="{{ route('photo.show', ['id'=>$photo->id]) }}" class="btn btn-outline-success" role="button" aria-pressed="true">Show Photo</a>
        
    </div>
    @endforeach
    </div>
</div>
@endsection