@extends('welcome')

@section('title','記録一覧')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
<h2>記録一覧</h2>
@foreach ($data as $d )
<p> {{$d->name}}
    {{$d->day}}
    {{$d->temp}}
    <a href="/edit/{{$d->id}}">編集</a>
</p>
@endforeach
</div>
</div>
@endsection