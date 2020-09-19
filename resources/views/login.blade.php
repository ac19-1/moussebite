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
            align-items: center;
        }

        .home > a {
            display: flex;
            align-items: center;
            padding: 0px 4px;
        }

        .image {
            border: 1px solid floralwhite;
        }

        .bg-floral-white {
            background-color: floralwhite;
        }

        .button button {
            border: 1px solid #ced4da;
        }

        .btn-link {
            color: #636363 !important;
        }

        .btn-link:hover {
            color: #434343 !important;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="mynavbar">
        <div class="home h-100">
            <a href="/" class="h-100">
                <img src="/storage/images/logobanner/MousseBite-06.png" alt="" height="60%">
            </a>
        </div>
    </div>
    <div class="login">
        <form action="" method="post">
            @csrf
            <div class="form d-flex justify-content-center align-items-center w-100" style="height: 90vh">
                <div class="image" style="height: 80%">
                    <img src="/storage/images/logobanner/MousseBite-04.png" alt="" height="100%">
                </div>
                <div class="inner-form bg-floral-white p-4" style="width: 30%; height: 80%">
                    <div class="text-center">
                        <h4>Welcome to MousseBite</h4>
                    </div>
                    <div class="inputs w-100 d-flex align-items-center justify-content-center flex-column flex-wrap" style="height:80%">
                        <div class="email my-2 w-100">
                            <input type="email" name="email" class="form-control" placeholder="Email Address" id="">
                        </div>
                        <div class="password my-2 w-100">
                            <input type="password" name="password" class="form-control" placeholder="Password" id="">
                        </div>
                        <div class="button my-2 w-100">
                            <button type="submit" class="btn bg-light w-100">Login</button>
                        </div>
                        <div class="redirect my-2 w-100">
                            <a href="/register" class="btn btn-link w-100">Don't have an account yet? Register now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>