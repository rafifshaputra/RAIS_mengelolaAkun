<!DOCTYPE html>
<html>
<head>
    <title> @yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/detailMaster.css">
    <style>
    @media only screen and (max-width: 600px) {
        hr{margin-top:75px;}
    }

    @media only screen and (max-width: 850px) {
        hr{margin-top:75px;}
    }
    </style>
</head>

<body>
    <header>

        <nav>
            <a href="#"><span style="font-size:28px;color:#2A2E43;">Dashboard</span></a>
            <span class="right-nav" style=" align:120px;float:right;font-size:15px;padding-top:2px;">
                <a href="#" class="btn btn-default btn-sm" style="background-color:#2A2E43;color:white;font-size:15px;border-radius: 25px;width:100px;margin-right:20px;" >
                    Beranda
               </a>
                <a href="#" class="btn btn-default btn-sm" style="background-color:#EA4764;color:white;font-size:15px;border-radius: 25px;width:100px;" >
                     Log out
                </a>
                <span style="padding:5px;color:#2A2E43;opacity:0.2;font-size:25px;" > | </span>
                <span style="font-size:18px;"> Rafif Iqbal Shaputra</span>
            </span>
        </nav>
        <span class="pembatas"> <hr style="border-top: 2px solid #ADADAD;opacity:0.5;"></span>
    </header>

    <br>

    <div class="main">
        @yield('content')
    </div>

    <br>
    <footer>
        <p align="center">
            &copy; Developed by RAIS Developer Team
        </p>
    </footer>


</body>
</html>

