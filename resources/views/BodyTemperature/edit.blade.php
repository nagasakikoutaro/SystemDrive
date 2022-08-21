@extends('welcome')

@section('title','編集')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h2>体温編集ページ</h2>
        <form action="/update/{{$data->id}}" method="POST">
        @csrf
   
        <label>名前</label>
        <input type="text" name="name" value="{{$data->name}}">
        <label>日付</label>
        <input type="text" name="day" value="{{$data->day}}">
        <label>体温</label>
        <input type="text" name="temp" value="{{$data->temp}}">
    
        <input type="submit" value="更新">
        </form>
        <a href="/delete/{{$data->id}}">削除</a>
        </div>
    </div>
</div>
@endsection