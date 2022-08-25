@extends('welcome')

@section('title','記録一覧')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
<h2>記録一覧</h2>
<div class="row">
    <div class="list-news col-md-12 mx-auto">
        <div class="row">
            @foreach ($data as $d )
            <table class="table"  bgcolor="#a9a9a9">
                <thead>
                    <tr>
                       <th width = "20%"> {{$d->name}}</th>
                       <th width = "20%"> {{$d->day}}</th>
                       <th width = "20%"> {{$d->temp}}度</th>
                       <th width = "20%"><a href="/edit/{{$d->id}}">編集</a></th>
                    </tr>
                </thead>
                </tbody>
            </table>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>
@endsection