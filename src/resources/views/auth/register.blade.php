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
                <div class="register-form__group--wrapper">
                    <img src="{{ asset('/images/user.png') }}" alt="" aria-hidden="true" class="user-img">
                    <div class="register-form__group">
                        <label class="register-form__label" for="name">Username</label>
                        <input class="register-form__input" type="text" name="name"
                            id="name" value="{{ old('name') }}" autocomplete="username"
                            @error('name') aria-describedby="name-error" @enderror
                        />
                        @error('name')
                            <p id="name-error" class="register-form__error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="register-form__group--wrapper">
                    <img src="{{ asset('/images/email.png') }}" alt="" aria-hidden="true" class="email-img">
                    <div class="register-form__group">
                        <label class="register-form__label" for="email">Email</label>
                        <input class="register-form__input" type="text" name="email"
                            id="email" value="{{ old('email') }}" autocomplete="email"
                            @error('name') aria-describedby="email-error" @enderror
                        />
                        @error('email')
                            <p id="email-error" class="register-form__error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="register-form__group--wrapper">
                    <img src="{{ asset('/images/key.png') }}" alt="" aria-hidden="true" class="key-img">
                    <div class="register-form__group">
                        <label class="register-form__label" for="password">Password</label>
                        <input class="register-form__input" type="password" name="password"
                            id="password" value="{{ old('password') }}" autocomplete="password"
                            @error('password') aria-describedby="password-error" @enderror
                        />
                        @error('password')
                            <p id="password-error" class="register-form__error-message">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="register-form__button">
                    <input class="register-form__submit" type="submit" value="登録">
                </div>
            </form>
        </div>
    </div>
@endsection