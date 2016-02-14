@extends('app')

@section('content')


    <div class="container">

        <!--start about info-->
        <div class="top">
            <img src="http://tricialottwilliford.com/wp-content/uploads/2014/05/bigstock-Blank-notepad-over-laptop-and-51253441.jpg" width="1100px" height="700px" >
        </div>
        <div class="aboutus"><p>ABOUT US</p></div>
        <div class="info"><p>Middle Earth was created by a group of Senior IT students in California State University Northridge as a Senior project. Middle Earth is an interactive user-based blogging website that allows people to create blog posts that can be viewed by anyone. Each blog can also have certain tags added to them to help others identify what the posts are about, whether it be about food, programming, work or other things; this helps people determine if they want to read the post or not. The main page of the website displays all the blogs posted by users, starting by listing the most recent posts and descending down to the first post ever made. All the posts are displayed in a paginated way that simplifies browsing for articles.</p>
        </div><!--end about info-->
        <div class="logo"><img src="{{ asset('assets/images/logo3_.png') }}" ></div>

        <!--Start founders name and images-->
        <div class="founders">
            <p>Meet The Founders!<p>
            <div class="boxed1">
                <div class="image1">
                    <img src="{{ asset('assets/images/jesse.jpg') }}" >
                </div><!--end image1-->
                <div class="text">Jesse Pham<br>Switch Master/Security Administrator<br>
                </div><!--end text(Jesse)-->
            </div><!--end boxed1-->
            <div class="boxed2">
                <div class="image2">
                    <img src="{{ asset('assets/images/kevin.jpg') }}" >
                </div><!--end image2-->
                <div class="text">Kevin Elberger<br>Web Administrator<br>
                </div><!--end text(kevin)-->
            </div><!--end boxed2-->
            <div class="boxed3">
                <div class="image3">
                    <img src="{{ asset('assets/images/renzhi.jpg') }}" >
                </div><!--end image3-->
                <div class="text">
                    <p>Renzhi Liu<br>Network Administrator<br></p>
                </div><!--end text (renzhi)-->
            </div><!--end boxed3-->
            <div class="boxed4">
                <div class="image4">
                    <img src="{{ asset('assets/images/gaby.jpg') }}" >
                </div><!--end image4-->
                <div class="text">Gabriela Fonseca<br>Web Developer<br>
                </div><!--end text(gaby)-->
            </div>
            <div class="boxed5">
                <div class="image5">
                    <img src="{{ asset('assets/images/andre.jpg') }}" >
                </div><!--end image5-->
                <div class="text">Andre Petrossian<br>New member<br>
                </div><!--end text (andre)-->
            </div><!--end boxed5-->
        </div><!--founders end-->
    </div><!--end container-->

@stop
<style>
    html, body, div, span, applet, object,
    iframe, h1, h2, h3, h4, h5, h6, p,
    blockquote, pre, a, abbr, acronym,
    address, big, cite, code, del, dfn,
    em, font, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt,
    var, b, u, i, center, dl, dt, dd, ol,
    ul, li, fieldset, form, label, legend,
    caption {
        margin: 0;
        padding: 0;
        border: 0;
        outline: 0;
        font-size: 100%;
        vertical-align: baseline;
        background: transparent;
    }

    .boxed1{
        border:none;
        width:200px;
        height:350px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
    }
    .boxed2{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -350px;
        margin-right: 740px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
    }
    .boxed3{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -350px;
        margin-right: 490px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
    }
    .boxed4{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -350px;
        margin-right: 260px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
    }
    .boxed5{
        border:2px solid black;
        width:200px;
        height:350px;
        float: right;
        margin-top: -350px;
        margin-right: 20px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
    }

    .image{
        border:2px solid green;
        width:180px;
    }
    .aboutus{
        font-family: ‘Metrophobic’, Arial, serif;
        font-weight: 400;
        margin-top:50px;
        font-size:35px;
    }

    .top{
        margin-top:-150px;
        float:left;
    }

    .main{
        width:100px;
        padding:10px;
        border:3px black;
        margin:0;
    }

    .info p{
        width:500px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:20px;
        font-weight: 400;
        margin-top:20px;
    }

    .logo{
        float:right;
        margin-top:-400px;
        margin-right:150px;
    }

    .founders p{
        width:400px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:25px;
        font-weight: 400;
    }

</style>