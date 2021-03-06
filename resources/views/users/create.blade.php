
@extends('layouts.default')
@section('title','注册')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card">
            <div class="card-header" style="padding-top: 10px">
                <h5>注册</h5>
            </div>

            <div class="card-body">

                @include('shared._errors')
                <form method="post" action="{{route('users.store')}}">
                    {{ csrf_field() }}
                    <!--<input type="hidden" name="_token" value="fhcxqT67dNowMoWsAHGGPJOAWJn8x5R5ctSwZrAq" -->

                    <div class="form-group">
                        <label for="name">名称：</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"/>
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{old('email')}}"/>
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="text" name="password" class="form-control" value="{{old('password')}}"/>
                    </div>

                    <div class="form-group">
                        <label for="password-confirmation">确认密码：</label>
                        <input type="text" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}"/>
                    </div>

                    <button type="submit" class="btn btn-primary">注  册</button>
                    <div style="float: right">
                        <button type="button" class="btn btn-primary" href="{{route('sign up')}}">JUST GO!</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
@stop
