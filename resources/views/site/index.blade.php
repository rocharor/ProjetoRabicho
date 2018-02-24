@extends('template')

@section('content')
    <style>
        main {
            /* background-image: url('/images/pata-dog.jpg'); */
            background-repeat: repeat;
            background-size: 200px 200px;
        }
        .box {
            position: relative;
            width: 600px;
            height: 600px;
            background-color: #ccc;
            margin: 0 auto;
            border-radius: 10px
        }
        .logo {
            position: absolute;
            top: 150px;
            left: 150px;
            width: 300px;
            height: 300px;
            background-image: url('/images/logo.jpeg');
            background-size: cover;
            border-radius: 20px;
        }

        .box > .links {
            position: absolute;
            height: 10px;
        }

        .box > .links > a{
            color: #000;
            font-weight: bold;
            cursor: pointer;
        }

        .box > .links > a:hover{
            box-shadow: 0 0 20px #f00;
        }

        .link1 {
            top: 100px;
            left: 150px;
            width: 300px;
        }
        .link2 {
            top: 295px;
            right: 0;
            width: 100px;
        }
        .link3 {
            bottom: 100px;
            left: 150px;
            width: 300px;
        }
        .link4 {
            top: 295px;
            left: 0;
            width: 100px;
        }
    </style>
    <div class="box">
        <div class="logo"></div>
        <div class="links link1" align='center'><a href="#">Adote um Pet</a></div>
        <div class="links link2" align='center'><a href="#">Galeria</a></div>
        <div class="links link3" align='center'><a href="#">Remédios</a></div>
        <div class="links link4" align='center'><a href="#">Contato</a></div>
    </div>

    <script type="text/javascript">

    var h = window.innerHeight;
    var posicao = (h / 2) - 300;
    document.getElementsByClassName("box")[0].style.marginTop = posicao + 'px';
    // document.getElementById("box").style.marginTop = posicao + 'px';

    // window.onload = function() {
    //     var h = $(window).height();
    //     var posicao = (h / 2) - 150;
    //     $('.box').css('margin-top', posicao);
    // }

    </script>
@endsection
