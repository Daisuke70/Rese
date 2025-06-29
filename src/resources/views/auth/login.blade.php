@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css')}}">
<link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@endsection

@section('content')
    <div class="login-form">
        <div class="login-form__title">
            <p>Login</p>
        </div>

        <div class="login-form__inner">
            <form action="{{ route('user.register') }}" class="login-form__form" method="post">
                @csrf
                <div class="login-form__group--wrapper">
                    <img src="{{ asset('/images/email.png') }}" alt="" aria-hidden="true" class="email-img">
                    <div class="login-form__group--email">
                        <label class="login-form__label" for="email">Email</label>
                        <input class="login-form__input--email" type="text" name="email"
                            id="email" value="{{ old('email') }}" autocomplete="email"
                            @error('name') aria-describedby="email-error" @enderror
                        />
                    </div>
                </div>
                @error('email')
                    <p id="email-error" class="login-form__error-message">{{ $message }}</p>
                @enderror
                <div class="login-form__group--wrapper">
                    <img src="{{ asset('/images/key.png') }}" alt="" aria-hidden="true" class="key-img">
                    <div class="login-form__group--password">
                        <label class="login-form__label" for="password">Password</label>
                        <input class="login-form__input--password" type="password" name="password"
                            id="password" value="{{ old('password') }}" autocomplete="password"
                            @error('password') aria-describedby="password-error" @enderror
                        />
                    </div>
                </div>
                @error('password')
                    <p id="password-error" class="login-form__error-message">{{ $message }}</p>
                @enderror
                <div class="login-form__button">
                    <input class="login-form__submit" type="submit" value="ログイン">
                </div>
            </form>
        </div>
    </div>
@endsection