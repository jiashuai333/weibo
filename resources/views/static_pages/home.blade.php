
@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是<a href="https://www.baidu.com/" role="button">百度</a>
        </p>
        <p>
            一切，将从这里开始
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('sign up')}}" role="button">嘉怡点这里</a>
        </p>
    </div>
@stop