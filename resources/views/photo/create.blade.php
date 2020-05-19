@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    
      <div class="card">
        <div class="card-header">
          PhotoUpload
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('photo.store') }}" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Title</label>
              <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Text</label>
              <textarea name="text" class="form-control"></textarea>
              <br>
              <input id="photoimage" type="file" name="photoimage">
              <input type="hidden" name="album_id" value="{{ $album_id }}">
              <button class="btn btn-outline-info" type="submit">
                Upload
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
