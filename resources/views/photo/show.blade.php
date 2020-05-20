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
                        <form method="POST" action="{{ route('photo.destroy', ['id'=> $photo->id] ) }}" id="delete_{{ $photo->id}}">
                        @csrf
                        <a class="btn btn-outline-secondary" href="{{ route('photo.edit', ['id'=>$photo->id]) }}" >Edit</a>
                        <a href="#" class="btn btn-outline-danger" data-id="{{ $photo->id }}" onclick="deletePost(this);" >削除する</a>
                        </form>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// <!--//
// /************************************
// 削除ボタンを押してすぐにレコードが削除
// されるのも問題なので、一旦javascriptで
// 確認メッセージを流します。
// *************************************/
// //-->
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか?')) {
    document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>
@endsection
