<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPCST Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/about.css">
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

    <div class="title">
        <img src="../img/logo_plain.png" class="logotitle"alt="">
        <h3>EASTWOODS PROFESSIONAL COLLEGE OF SCIENCE AND TECHNOLOGY</h3>
        <p>Building 1 at A.H Banzon St., Ibayo, Balanga, Bataan</p>
    </div>

    <div class="quote">
        <p>"Empowering Futures, Building Success: Preparing Students for Lifelong Career Achievement"</p>
    </div>

    
    <div class="parentenroll">
        <div class="enroll">
        </div>
        <div class="enrolltxt">
            <h1>To all aspiring students!</h1>
            <h3>EPCST is now accepting enrollees. Join us and become a champion!</h3>
            <div class="button">
                <a href="{{ route('admissions') }}" class="enrollbtn">ENROLL NOW</a>
            </div>
        </div>
    </div>


    <div class="footer">
        <p>Copyright | EPCST 2024</p>
    </div>
    
   

    <script src="../js/index.js"></script>
    
</body>
</html>