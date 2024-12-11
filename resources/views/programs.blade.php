<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
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

        <div class="adbanner">
            <h1>CHOOSE YOUR PATH</h1>
        </div>

        <h1 class="coursetitle" id="ched">CHED COURSES</h1>

        <div class="container">
            <div class="coursecard">
                <img src="../img/19b7ac57-8d9f-4478-bec0-899e539c2cf3.jpg" alt="">
                <h3>Bachelor of Science in Information Technology</h3>
            </div>
            <div class="coursecard">
                <img src="../img/19b7ac57-8d9f-4478-bec0-899e539c2cf3.jpg" alt="">
                <h3>Bachelor of Science in Computer Science</h3>
            </div>
            <div class="coursecard">
                <img src="../img/19b7ac57-8d9f-4478-bec0-899e539c2cf3.jpg" alt="">
                <h3>Bachelor of Science in Computer Engineering</h3>
            </div>
            <div class="coursecard">
                <img src="../img/ade57f2f-3fef-4d28-ba40-c72c783d20af.jpg" alt="">
                <h3>Bachelor of Science in Hospitality Management</h3>
            </div>
        </div>

        <h1 class="coursetitle">TESDA/DIPLOMA COURSES</h1>
        
        <div class="container">
            <div class="coursecard">
                <img src="../img/ade57f2f-3fef-4d28-ba40-c72c783d20af.jpg" alt="">
                <h3>3-yr Hotel and Restaurant Technology</h3>
            </div>
            <div class="coursecard">
                <img src="../img/19b7ac57-8d9f-4478-bec0-899e539c2cf3.jpg" alt="">
                <h3>3-yr Tourism and Travel Management</h3>
            </div>
            <div class="coursecard">
                <img src="../img/19b7ac57-8d9f-4478-bec0-899e539c2cf3.jpg" alt="">
                <h3>3-yr Computer Engineering Technology</h3>
            </div>
            <div class="coursecard">
                <img src="../img/news-events-header-article.jpg" alt="">
                <h3>Caregiving Program</h3>
            </div>
        </div>
        <script src="../js/index.js"></script>
</body>
</html>