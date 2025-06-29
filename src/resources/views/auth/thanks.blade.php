@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
<link rel="stylesheet" href="{{ asset('css/auth/thanks.css')}}">
@endsection

@section('content')
    <div class="thanks-content">
        <p>会員登録ありがとうございます</p>
        <div class="thanks-content__login-button">
            <a href="{{ route('show.login')}}" class="thanks-content__login-link">ログインする</a>
        </div>
    </div>
@endsection