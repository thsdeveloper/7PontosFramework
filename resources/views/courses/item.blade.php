@extends('layouts.app')

@section('content')
  <h1>{{$curso->title}}</h1>
{!! $curso->body !!}

@endsection
