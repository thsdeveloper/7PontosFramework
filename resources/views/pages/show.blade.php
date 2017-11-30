@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3><i class="fa fa-flag" aria-hidden="true"></i> <strong>{{$page->title}}</strong></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            {!!$page->body!!}
        </div>
    </div>
@endsection
