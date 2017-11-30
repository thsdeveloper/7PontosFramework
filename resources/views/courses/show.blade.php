@extends('layouts.app')

@section('content')
  <h1>{{setting('cursos.title')}}</h1>
  <p>{{setting('cursos.description')}}</p>
  @forelse ($courses as $course)
    <div id="cursos">
      <div id="img_col"><img src="{{url('storage/'.$course->image)}}"/></div>
      <div id="desc_img">
        <a href="{{url('cursos/'.$course->slug)}}"class="link">
          {{$course->title}}
        </a>
      </div>
    </div>
  @empty
    <p>Sem cursos cadastrado!</p>
  @endforelse
@endsection
