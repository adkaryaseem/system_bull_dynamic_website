<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('backend/css/login.style.css') }}">
    <title>Login Pannel</title>
</head>
<body>
    @if (session()->has('message'))
    <p>
        {{ session()->get('message') }}
    </p>
@endif
<form action="{{ route('login') }}" method=POST>
    @csrf
        <div class="legent">
        <fieldset>
                <legend>System Bull Login Panel</legend>
                <div class="logo">
                    <img src="{{ asset('frontend/image/logo.png') }}"  alt="logo">
                </div>
                <h1 class="title">
                    Login Panel
                </h1>
                <div class="input-field">
                    <div class="username">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email" required>
                        @error("email")
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="password" required>
                        @error("password")
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                    </div>
                    <div class="submit">
                        <button type="submit">Login</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</body>
</html>