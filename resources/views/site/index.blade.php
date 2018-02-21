@extends('template')

@section('content')
    <style>
        .box {
            position: relative;
            width: 300px;
            height: 300px;
            background-color: #ccc;
            margin: 0 auto;
        }
        .logo {
            position: absolute;
            top: 100px;
            left: 100px;
            width: 100px;
            height: 100px;
            background-image: url('/images/logo.jpeg');
            background-size: cover;
        }
        .link1 {
            position: absolute;
            top: 65px;
            left: 100px;
            width: 100px;
            height: 10px;
        }
        .link2 {
            position: absolute;
            top: 145px;
            left: 210px;
            width: 90px;
            height: 10px;
        }
        .link3 {
            position: absolute;
            top: 215px;
            left: 100px;
            width: 100px;
            height: 10px;
        }
        .link4 {
            position: absolute;
            top: 145px;
            width: 90px;
            height: 10px;
        }
    </style>
    <div class="box">
        <div class="logo"></div>
        <div class="link1" align='center'>Link 1</div>
        <div class="link2" align='center'>Link 2</div>
        <div class="link3" align='center'>Link 3</div>
        <div class="link4" align='center'>Link 4</div>
    </div>

    <script type="text/javascript">

    var h = window.innerHeight;
    var posicao = (h / 2) - 150;
    document.getElementsByClassName("box")[0].style.marginTop = posicao + 'px';
    // document.getElementById("box").style.marginTop = posicao + 'px';

    // window.onload = function() {
    //     var h = $(window).height();
    //     var posicao = (h / 2) - 150;
    //     $('.box').css('margin-top', posicao);
    // }

    </script>
@endsection
