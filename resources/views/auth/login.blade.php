<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- link bootstrap ver 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 600px;
            padding: 8% 0 0;
            margin: auto;
        }
        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 600px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }
        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 90%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }
        .form .is-invalid{
            border:  2px solid red;
            background: #ff7979;
            opacity: 0.5;
        }
        .form .is-invalid::placeholder {
            color: black;
            opacity: 1; /* Firefox */
        }
        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #00a8ff;
            width: 90%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            letter-spacing: 3px;
            transition: all 0.3 ease;
            cursor: pointer;
        }
        .form button:hover,.form button:active,.form button:focus {
            background: #00a8ff;
        }
        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }
        .form .message a {
            color: #00a8ff;
            text-decoration: none;
        }
        body {
            background: #ecf0f1;
            font-family: "Roboto", sans-serif;
        }
        .kotak{
            max-width: 600px;
            height: 17px;
            background-color: #00a8ff;
            margin: 0 auto;

        }
        .title{
            font-size: 20px;
            padding-bottom: 10px;
            font-weight: bold;
            color: #00a8ff;
            margin-top: -20px;
        }
    </style>
    <title>Pembayaran SPP | Login</title>
</head>
<body>

    <div class="login-page">
        <div class="kotak"></div>
        <div class="form">
            <p class="title">Login To Your Account </p>
            <form class="login-form" method="post" action="{{ route('post.login') }}">
                @csrf
                <input class="@error('username') is-invalid @enderror" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <input class="@error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit">login</button>
                <p class="message">Forgot Password?  <a href="#">Tap Here</a></p>
            </form>
        </div>
    </div>












    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
