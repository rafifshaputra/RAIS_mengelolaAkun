<!DOCTYPE html>
<html>
<head>

    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    body{
        padding:10px;
        font-family: 'Montserrat'
    }

   nav{
        margin-left: 160px; /* Same as the width of the sidenav */
        /* Increased text to enable scrolling */
        padding: 0px 10px;
        padding-left:10px;
        padding-right:10px;
    }

    footer{
        padding-top:15px;
    }

    .sidenav {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 18px;
        color: #818181;
        display: block;
    }

    .sidenav a:hover {
        color: #f1f1f1;
    }

    .main {
        margin-left: 160px; /* Same as the width of the sidenav */
        font-size: 12px; /* Increased text to enable scrolling */
        padding: 0px 10px;
    }

    @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
    }


    </style>
</head>

<body>
    <div class="sidenav">
            <img src="ra1.png" alt="" id = "gambar-rais" class = "center">
            <br><br>
            <div>
                <img src="ra1.png" alt="" class = "gambar-rais-kiri">
                <a href="#about">Beranda</a>
            </div><br>
            <div>
                <img src="ra1.png" alt="" class = "gambar-rais-kiri">
                <a href="#services">Info</a>
            </div><br>
            <div>
                <img src="ra1.png" alt="" class = "gambar-rais-kiri">
                <a href="#clients">Tentang</a>
            </div><br>
            <div>
                <img src="ra1.png" alt="" class = "gambar-rais-kiri">
                <a href="#contact">Pengaturan Akun</a>
            </div>
    </div>

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

