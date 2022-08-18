@extends('welcome')

@section('title','体温入力')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
    <h2>体温入力ページ</h2>
        <form action="/post" method="POST">
        @csrf
        <label>名前</label>
        <input type="text" name="name" value="{{ Auth::user()->name }}">
        <label>日付</label>
        <input type="text" name="day" value="{{old('day')}}">
        <label>体温</label>
        <input type="text" name="temp" value="{{old('temp')}}">
        <input type="submit" value="投稿">
        </form>
        </div>
    </div>
</div>
@endsection