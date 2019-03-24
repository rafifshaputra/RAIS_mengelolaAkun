<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
    body{
        padding:10px;
        font-family: 'Montserrat'
    }

   nav{
        padding-left:10px;
        padding-right:10px;
    }

    footer{
        padding-top:15px;
    }

    </style>
</head>

<body>
    <header>
        <nav>
            <a href="#"><span style="font-size:28px;color:#2A2E43;">Dashboard</span></a>
            <span class="right-nav" style=" align:120px;float:right;font-size:15px;padding-top:2px;">
                <a href="#" class="btn btn-default btn-sm" style="background-color:#EA4764;color:white;font-size:15px;border-radius: 25px;" >
                     Log out
                </a>
                <span style="padding:5px;color:#2A2E43;opacity:0.2;font-size:25px;" > | </span>
                <span> Rafif Iqbal Shaputra</span>
            </span>
        </nav>
    <span> <hr style="border-top: 2px solid #ADADAD;opacity:0.5;"></span>
    </header>
    <br>
    @yield('content')

    <br>
    <footer>
        <p align="center">
            &copy; Developed by RAIS Developer Team
        </p>
    </footer>

</body>
</html>

