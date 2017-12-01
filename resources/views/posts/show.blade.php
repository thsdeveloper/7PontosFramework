@extends('layouts.app')

@section('content')
  <h1>Todos os destaques</h1>
  @forelse ($posts as $post)
    <ul class="ul_parecer">
      <li class="link">
        <a href="{{url('post/'.$post->slug)}}">{{$post->title}}</a>
      </li>
    </ul>
  @empty
    <p>Sem livros cadastrado!</p>
  @endforelse
@endsection
