<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @if (session()->has('message'))
        <p>
            {{ session()->get('message') }}
        </p>
    @endif
    <form action="{{ route('login') }}" method=POST>
        @csrf
        <table>
            <tr>
                <td>
                    Email 
                </td>
                <td>
                    <input type="email" name="email">
                    @error("email")
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="password">
                    @error("password")
                        <span>
                            {{ $message }}
                        </span>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>