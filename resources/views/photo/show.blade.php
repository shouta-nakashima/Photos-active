@extends('layouts.app')

@section('content')
<div class="container">
<h4>{{ $photo->title}}</h4>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="{{ $photo->photoimage }}"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" ></text></svg>
                    
                    <div class="card-body">
                        <p class="card-text">{{ $photo->text}}</p>
                        <a class="btn btn-outline-secondary" href="/album/show/{{ $photo->album_id }}" >Back To Page</a>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
