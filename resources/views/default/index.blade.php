<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/asset/font-awesome/css/all.css">
    <script src="/asset/jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="/asset/bootstrap/css/bootstrap.css">
    <script src="/asset/bootstrap/js/bootstrap.js"></script>
    <title>MousseBite</title>
    <style>
        html, body {
            background-color: #fff;
            color: #636363;
            box-sizing: border-box;
        }

        * {
            font-family: 'Kumbh Sans', sans-serif;
            font-weight: 200;
            margin: 0;
            padding: 0;
        }

        .mynavbar {
            height: 10vh;
            padding: 1%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actions > a {
            margin: 0 15px;
            font-size: large;
            text-decoration: none;
            color: #636363;
            border: 1px solid transparent;
            transition: border 0.2s ease;
            padding: 10px 4px;
        }

        .actions > a:hover {
            border-bottom: 1px solid #f8b0ba;
            border-top: 1px solid #f8b0ba;
        }

        .home > a {
            display: flex;
            align-items: center;
            padding: 0px 4px;
        }

        .footer {
            background-color: white;
            padding: 3%;
            text-align: center;
        }

        hr{
            border: 1px solid #f8b0b0;
            opacity: 0.5;
            margin: 3% 0;
        }

        .fab {
            transition: color 0.2s ease;
            cursor: pointer;
            margin: 0 5px;
        }

        #socmed-link:hover .fab {
            color: #f8b0ba;
        }

        #socmed-link {
            color: #636363;
            text-decoration: none;
        }

        .footer a#footer-link {
            margin: 0 15px;
            font-size: large;
            text-decoration: none;
            color: #636363;
            border: 1px solid transparent;
            transition: border 0.2s ease;
            padding: 10px 4px;
        }

        .footer a#footer-link:hover {
            border-bottom: 1px solid #636363;
            border-top: 1px solid #636363;
        }

        .justify-content-evenly {
            justify-content: space-evenly;
        }


    </style>
    @yield('style')
</head>
<body>
    <div class="mynavbar">
        <div class="home h-100">
            <a href="/" class="h-100">
                <img src="/storage/images/logobanner/MousseBite-06.png" alt="" height="60%">
            </a>
        </div>
        <div class="actions">
            <a href="/mousse">Mousse</a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="/cart">Cart</a>
            @endif
            <a href="/about">About</a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a href="/logout">Logout</a>
            @else
                <a href="/login">Login</a>
            @endif
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <div style="font-size: large">
            Melts in your mouth, stays in your heart.
        </div>
        <div style="padding: 10px; font-size: 30px">
            <a id="socmed-link" target="_blank" href="https://instagram.com"><i class="fab fa-instagram-square"></i></a>
            <a id="socmed-link" target="_blank" href="https://facebook.com"><i class="fab fa-facebook-square"></i></a>
            <a id="socmed-link" target="_blank" href="https://twitter.com"><i class="fab fa-twitter-square"></i></a>
            <a id="socmed-link" target="_blank" href="https://line.me"><i class="fab fa-line"></i></a>
            <a id="socmed-link" target="_blank" href="https://whatsapp.com"><i class="fab fa-whatsapp-square"></i></a>
        </div>
        <hr>
        <div>
            <a id="footer-link" href="/mousse">Mousse</a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a id="footer-link" href="/cart">Cart</a>
            @endif
            <a id="footer-link" href="/about">About</a>
            @if(\Illuminate\Support\Facades\Auth::check())
                <a id="footer-link" href="/logout">Logout</a>
            @else
                <a id="footer-link" href="/login">Login</a>
            @endif
        </div>
    </div>
</body>
</html>