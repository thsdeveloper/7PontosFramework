@extends('layouts.app')

@section('content')
  <h1>{{setting('livros.title_interno')}}</h1>
  @forelse ($books as $book)
    <div id="livros">
      <div id="img_col"><img src="{{url('storage/'.$book->image)}}"/></div>
      <div id="desc_img">
        {{$book->description}}
      </div>
    </div>
  @empty
    <p>Sem livros cadastrado!</p>
  @endforelse
@endsection
