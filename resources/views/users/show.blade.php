@extends('layouts.app')

@section('content')
  <h1>Todos os destaques</h1>
  @forelse ($users as $user)
    <div id="profissionais">
        <img src="{{url('storage/'.$user->avatar)}}" width="120" height="152" class="img"><strong>{{$user->name}} </strong> - {{$user->intro_curriculo}}
        <a href="{{url('/profissional/'.$user->id)}}" class="voltar"><strong><br>
        Veja o curriculo </strong></a></div>
  @empty
    <p>Sem livros cadastrado!</p>
  @endforelse
@endsection
