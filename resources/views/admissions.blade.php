<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions</title>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/admission.css">

</head>
<body>
    <div class="header">
    <a href="{{ route('welcome') }}" class="logoftname">
            <img src="../img/logo_plain.png" class="logo" alt="">
            
            <div class="name">
            <p>EASTWOODS PROFESSIONAL COLLEGE</p>
            <p> Of Science and Technology</p>
            </div>
        </a>
            <div class="nav">
            <a href="{{ route('homepage') }}" id="home">Home</a>
            <a href="{{ route('about') }}" id="about">About EPCST</a>
            <a href="{{ route('programs') }}" id="programs">Programs</a>
            <a href="{{ route('admissions') }}" id="ad">Admissions</a>
            <a href="{{ route('linkages') }}" id="linkages">Linkages</a>
            <a href="{{ route('contact') }}" id="contact">Contact Us</a>
            <div class="button">
                <a href="{{ route('login') }}" class="login">LOGIN</a>
            </div>
        </div>
        </div>
        
    <div class="banner">
    </div>

    

    <div class="admissionheader">
        <h1>ADMISSION</h1>
        <p>Lorem ipsum some subtext lorem ipsum times two times two times two </p>
    </div>
    <img src="../img/logo_plain.png" id="logoheader" alt="">

    <div class="admissionoptions">

        <a class="postcard" href="{{ route('newstudent') }}">
            <img class="pcimg" src="../img/yo.jpg" alt="">
            <h3>New Students</h3>
            <p>Lorem ipsum some subtext lorem ipsum times two times two times two</p>
    </a>

        <a class="postcard" href="{{ route('oldstudent') }}">
            <img class="pcimg" src="../img/ayo.jpg" alt="">
            <h3>Old Students</h3>
            <p>Lorem ipsum some subtext lorem ipsum times two times two times two</p>
        </a>
    </div>

    <script src="../js/index.js"></script>
</body>
</html>