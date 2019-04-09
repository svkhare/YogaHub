<?php

?>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>

        .section1{
            grid-column:span 3;
        }
        .section2{
            grid-column:span 4;
        }
        .section3{
            grid-column:span 4;
        }

        .yg-footer {

            display:grid;
            grid-template-columns:repeat(12,1fr);
            grid-template-rows:auto;
            grid-gap:20px;
            background: #252728;
            padding: 12px 50px 12px 50px;
            font-size: 12px;
            line-height: 24px;
            color: #9b9b9b;
            text-align: left;

        }

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 25px;
            height:25px;
            text-align: center;
            text-decoration: none;
            margin: 4px 2px;
            border-radius:50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            color: white;
            background: yellow;
        }

        .fa-google {
            background: #dd4b39;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }
        .ull {
            list-style-type: none;
            margin: 0;
            padding: 0;
            float:left;
            height: 100px;
            background-color: #252728 ;
        }
        .lii {
            display: inline;
        }

    </style>
</head>
<body style="margin:0 auto">
<footer class="yg-footer">
    <div class="section1" style="border-right: 2px solid white">
        <h2>Yoga<span style="color:orangered">Hub</span></h2>
        <h3 style="color: white;font-family: Arial; font-size:12px;margin-top: 0px">Copyright © 2018 YogaHub, Inc.</h3>
    </div>
    <div class="section2" style="border-right: 2px solid white" >
        <h2 style="font-family: sans-serif; font-size: 14px; color:white">Have a question or need help? <a href="contact.php" style="color:orangered">Contact us</a></h2>
        <h4 style="color: white">Privacy Policy • Terms & Conditions</h4>

    </div>
    <div class="section3">
        <center>
        <ul class="ull">
           <li class="lii"><a href="#" class="fa fa-linkedin"></a></li>
            <li class="lii"><a href="#" class="fa fa-google"></a></li>
            <li class="lii"><a href="#" class="fa fa-twitter"></a></li>
            <li class="lii"><a href="#" class="fa fa-facebook"></a></li>
        </ul>
        </center>
    </div>
    </div>
</footer>
</body>