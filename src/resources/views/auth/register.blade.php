@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
<link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection

@section('content')
    <div class="register-form">
        <div class="register-form__title">
            <p>Registration</p>
        </div>

        <div class="register-form__inner">
            <form action="{{ route('user.register') }}" class="register-form__form" method="post">
                @csrf
                <div class="register-form__group">
                    <label class="register-form__label" for="name">Username</label>
                    <input class="register-form__input" type="text" name="name" id="name" value="{{ old('name') }}" />
                    <p class="register-form__error-message">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-form__group">
                    <label class="register-form__label" for="email">Email</label>
                    <input class="register-form__input" type="email" name="email" id="email" value="{{ old('email') }}" />
                    <p class="register-form__error-message">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-form__group">
                    <label class="register-form__label" for="password">Password</label>
                    <input class="register-form__input" type="password" name="password" id="password"/>
                    <p class="register-form__error-message">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="register-form__button">
                    <input class="register-form__submit" type="submit" value="登録">
                </div>
            </form>
        </div>
    </div>
@endsection