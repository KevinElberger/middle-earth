@extends('app')

@section('content')


    <div class ="container">
        <div class="info">
            <h1>Get in Touch</h1>
            <div class="number">
                <img src="{{ asset('assets/images/phone_.png') }}">
                <p>(323) 267-1017</p>
            </div>

            <div class="location">
                <img src="{{ asset('assets/images/pin_.png') }}">
                <p>Northridge, CA</p>
            </div>

            <div class="email">
                <img src="{{ asset('assets/images/email_.png') }}">
                <p>middle.earth@gmail.com</p>
            </div>
        </div>

        <div class="message">
            <div class="title"><h1>Send us a Message</h1></div>
            <div class="form">
                <form>
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea type="text" placeholder="Message"></textarea>
                    <button id="button" type="button">Submit</button>
                </form>
            </div>
        </div>

        <div class="locate">
            <div class="title2"><h1>Visit Us</h1></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1
		m3!1d6596.523588667117!2d-118.53185199330272!3d34.24186288626084!
		2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e837fd2aec4
		cf7%3A0x26e5b504d7d7fff2!2sCalifornia+State+University%2C+Northridge!
		5e0!3m2!1sen!2sus!4v1458255163096" width="1000" height="550" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
        </div>

    </div>

    <style>
        body{
            background-color:black;
            background-image:url("/assets/images/dark_Tire.png")

        }

        .info{
            width: 1000px;
        }

        .info h1{
            width:600px;
            color:white;
            margin-left: 310px;
            margin-top: 60px;
            font-family:‘Metrophobic’, Arial, serif;
            font-size:90px;
            font-weight: 300;
        }

        .number{
            margin-left: 50px;
            margin-top: 50px;
            color: white;
        }


        .number p{
            margin-left: 5px;
            font-family:‘Metrophobic’, Arial, serif;
            font-size:25px;
            font-weight: 300;
        }

        .location{
            margin-left: 465px;
            margin-top:-245px;
            color: white;
        }

        .location p{
            font-family:‘Metrophobic’, Arial, serif;
            font-size:25px;
            font-weight: 300;
        }

        .email{
            margin-left: 895px;
            margin-top: -285px;
            color: white;
        }

        .email img{
            margin-top: 30px;
        }

        .email p{
            font-family:‘Metrophobic’, Arial, serif;
            font-size:25px;
            font-weight: 300;
            margin-left:-60px;
            margin-top: 13px;
        }

        .title h1{
            width:;
            font-family:‘Metrophobic’, Arial, serif;
            font-size:89px;
            font-weight: 300;
            color: white;
            margin-left: 150px;
            margin-top: 140px;
        }

        input[type=text]{
            width: 600px;
            height: 35px;
            color: white;
            background: black;
            border-radius: 5px;
            border: 1px solid white;
            text-decoration: none;
            margin-left: 250px;

        }

        input[type=email]{
            width: 600px;
            height: 35px;
            color: white;
            background: black;
            border-radius: 5px;
            border: 1px solid white;
            text-decoration: none;
            margin-left: 250px;
            margin-top: 10px;
        }
        textarea[type=text]{
            width: 600px;
            height: 200px;
            color: white;
            border-radius: 5px;
            border: 1px solid white;
            background: black;
            text-decoration: none;
            margin-left: 250px;
            margin-top: 10px;
        }

        .form button{
            width:600px;
            height:30px;
            margin-left:250px;
            margin-top:10px;
            float:center;
            background-color:black;
            border-color:white;
            color:white;

        }

        .form button:hover{
            width:600px;
            height:30px;
            margin-left:250px;
            margin-top:10px;
            float:center;
            background-color:white;
            border-color:white;
            color:black;

        }
        .title2 h1{
            width:;
            font-family:‘Metrophobic’, Arial, serif;
            font-size:90px;
            font-weight: 300;
            color: white;
            margin-left: 400px;
            margin-top: 100px;
        }

        iframe{
            margin-left: 65px;
        }
    </style>