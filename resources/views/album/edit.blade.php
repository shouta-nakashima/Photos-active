@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    
      <div class="card">
        <div class="card-header">
          AlbumUpload
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('album.update', ['id'=>$album->id]) }}" enctype="multipart/form-data">
          @csrf
          <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="{{ $album->albumimage }}"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" ></text></svg>
            <div class="form-group">
              <label for="formGroupExampleInput">AlbumTitle</label>
              <input type="text" class="form-control" name="title" value="{{ $album->title}}">
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Explanation</label>
              <textarea name="text" class="form-control">{{ $album->text}}</textarea>
              <br>
              <input id="albumimage" type="file" name="albumimage">
              <button class="btn btn-outline-info" type="submit">
                UpDate
              </button>
              <a class="btn btn-outline-secondary" href="{{ route('home') }}" >Back To Home</a>
            </div>
          </form>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
              </ul>
          </div>
          @endif

          @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
          @endif
        </div>
      </div>
    </div>
</div>
@endsection