@extends('app')

@section('content')


    <div class ="container">
        <div class="top">
            <img src="{{ asset('assets/images/contactbg.jpg') }}" >
        </div>
        <div class="message">

            <form>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <textarea type="text" placeholder="Message"></textarea>
                <input type="submit" value="Send" />
            </form>
        </div>

        <div class="info">

            <img src="{{ asset('assets/images/location.png') }}">
            <div class="location">
                <p>Northridge, CA</p>
            </div>
            <hr>
            <img src="{{ asset('assets/images/phone.png') }}">
            <div class="number">
                <p>(323) 267-1017</p>
            </div>
            <hr>
            <img src="{{ asset('assets/images/email.png') }}">
            <div class="email">
                <p>middle.earth@gmail.com</p>
            </div>

        </div>
    </div>
@stop

<style>

    .info{
        margin-left:600px;
        margin-top:-290px;
        font-family: 'Josefin Sans', sans-serif;
    }
    .info p{
        margin-left:100px;
        margin-top:-30px;
    }


    .message{
        font-size:20px;
        max-width: 500px;
        padding: 10px 20px;
        margin: 20px;
        margin-top:40px;
        padding: 20px;
        background: grey;
        border-radius: 8px;
        font-family: 'Josefin Sans', sans-serif;

    }

    .message input[type="text"],
    .message input[type="email"],
    .message textarea
    {
        background: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        margin: 0;
        outline: 0;
        padding: 7px;
        width: 100%;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        color:black;
        margin-bottom: 30px

    }

    .message input[type="submit"]
    {
        background:#A4A4A4;
        border:none;
        border-radius: 4px;
        color:white;
        font-size:16px;
    }

    .message input[type="submit"]:hover
    {
        background:black;
    }

</style>