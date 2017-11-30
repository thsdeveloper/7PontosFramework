@extends('layouts.app')

@section('content')
  <h1>Livros publicados - Obras da Dra. Celita Oliveira Sousa</h1>
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
