@extends('app')

<div class="title"><h1>"The Goal of Middle Earth.. Create, Explore, Interact"</h1></div>
<div class="container">

    <!--start about info-->
    <div class="top"></div>
    <div class="aboutus"><p>ABOUT US</p></div>
    <div class="info">
        <p>Middle Earth was created by a group of Senior IT students in California State University Northridge as a Senior project. Middle Earth is an interactive user-based blogging website that allows people to create blog posts that can be viewed by anyone. Each blog can also have certain tags added to them to help others identify what the posts are about, whether it be about food,</p>
        <div class="info2">
            <p> programming, work or other things; this helps people determine if they want to read the post or not. The main page of the website displays all the blogs posted by users, starting by listing the most recent posts and descending down to the first post ever made. All the posts are displayed in a paginated way that simplifies browsing for articles.</p>
        </div>
    </div><!--end about info-->
    <!--Start founders name and images-->
    <div class="founders">
        <p>THE TEAM<p>
        <div class="Linh">
            <div class="image1">
                <img src="{{ asset('assets/images/jesse.jpg') }}" >
            </div><!--end image1-->
            <div class="text">Linh Pham<br>Switch Master/Security Administrator<br>
            </div><!--end text(Jesse)-->
        </div><!--end boxed1-->
        <div class="kevin">
            <div class="image2">
                <img src="{{ asset('assets/images/kevin.jpg') }}" >
            </div><!--end image2-->
            <div class="text">Kevin Elberger<br>Web Administrator<br>
            </div><!--end text(kevin)-->
        </div><!--end boxed2-->
        <div class="gaby">
            <div class="image3">
                <img src="{{ asset('assets/images/gaby.jpg') }}" >
            </div><!--end image3-->
            <div class="text">Gabriela Fonseca<br>Web Developer<br>
            </div><!--end text(gaby)-->
        </div><!--end boxed3-->
        <div class="renzhi">
            <div class="image4">
                <img src="{{ asset('assets/images/renzhi.jpg') }}" >
            </div><!--end image4-->
            <div class="text">Renzhi Liu<br>Network Administrator<br>
            </div><!--end text (renzhi)-->
        </div>
        <div class="andre">
            <div class="image5">
                <img src="{{ asset('assets/images/andre.jpg') }}" >
            </div><!--end image5-->
            <div class="text">Andre Petrossian<br>New member<br>
            </div><!--end text (andre)-->
        </div><!--end boxed5-->
    </div><!--founders end-->
</div><!--end container-->


<style>
    body{
        background-image:url("/assets/images/dark_Tire.png");
    }
    .title h1{
        width:1000px;
        margin-top:100px;
        margin-left:180px;
        color:white;
    }

    .linh{
        border:none;
        width:200px;
        height:350px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
        margin-left:220px;
        color:white;
    }
    .kevin{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -350px;
        margin-right: 500px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
        color:white;
    }
    .gaby{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -350px;
        margin-right: 280px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
        color:white;
    }

    .renzhi{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -80px;
        margin-right: 360px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
        color:white;
    }
    .andre{
        border:none;
        width:200px;
        height:350px;
        float: right;
        margin-top: -80px;
        margin-right: 80px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:15px;
        font-weight: 300;
        color:white;
    }

    .image{
        border:2px solid green;
        width:180px;
    }
    .aboutus{
        font-family: ‘Metrophobic’, Arial, serif;
        font-weight: 400;
        margin-top:50px;
        margin-left:460px;
        font-size:35px;
        color:white;
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
        margin-left:50px;
        color:white;
    }

    .info2 p{
        width:500px;
        font-family:‘Metrophobic’, Arial, serif;
        font-size:20px;
        font-weight: 400;
        margin-top:-210px;
        margin-left:580px;
        color:white;
    }

    .founders p{
        width:400px;
        font-family:‘Metrophobic’, Arial, serif;
        color:white;
        font-size:35px;
        font-weight: 400;
        margin-left:450px;
        margin-top:50px;
    }

</style>