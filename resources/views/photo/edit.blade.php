@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    
      <div class="card">
        <div class="card-header">
          PhotoUpDate
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('photo.update', ['id'=>$photo->id]) }}" enctype="multipart/form-data">
          @csrf
          <img class="bd-placeholder-img card-img-top" width="100%" height="auto" src="{{ $photo->photoimage }}"preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" ></text></svg>
            <div class="form-group">
              <label for="formGroupExampleInput">PhotoTitle</label>
              <input type="text" class="form-control" name="title" value="{{ $photo->title}}">
            </div>
            
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Explanation</label>
              <textarea name="text" class="form-control">{{ $photo->text}}</textarea>
              <br>
              <input id="photoimage" type="file" name="photoimage">
              <button class="btn btn-outline-info" type="submit">
                UpDate
              </button>
              <a class="btn btn-outline-secondary" href="/album/show/{{ $photo->album_id }}" >Back To Home</a>
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