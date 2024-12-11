<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Student Admission</title>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;500;600;700&display=swap" rel="stylesheet">
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
        </div>
        <img src="../img/logo_plain.png" class="ad-logo" alt="">

    
        <h2 class="ad-container">New Students</h2>

        <h3 class="adreq">Admission Requirements</h3>
        <div class="adreqlist">
            <h4 class="ad-coursetitle">CHED Courses: </h4>
            <ul>
                <li>Form 137/138 (Original Copy)</li>
                <li>Transcript of Records / Certification of Grades (Original Copy)</li>
                <li>Good Moral Certificate (Original Copy)</li>
                <li>PSA Birth Certificate (Photocopy)</li>
                <li>1x1 Picture in White Background (Softcopy only to be uploaded at online registration/enrollment portal)</li>
            </ul>
        </div>
        <div class="adreqlist">
            <h4 class="ad-coursetitle">TESDA/DIPLOMA Courses: </h4>
            <ul>
                <li>Senior High School Graduate</li>
                <li>Senior High School Diploma</li>
                <li> Form 138 (Original Copy)</li>
                <li>Transcript of Records / Certification of Grades (Original Copy)</li>
                <li>Good Moral Certificate (Original Copy)</li>
                <li>PSA/NSO Birth Certificate (Original Copy)</li>
                <li>4pcs. 1x1 Picture in White Background</li>
                <li>4pcs. 1x1 Passport Size Picture with Collar in White Background</li>
            </ul>
        </div>

        <h3 class="adreq">Procedure</h3>
        <div class="proc-container">
            <ol>
                <li>Fill out this Google Form: <a href="">Eastwoods New Student Application Form.</a></li>
                <li>After filling it out, wait for our admission to contact via the phone number provided in the form.</li>
                <li>Pay the fees and you're done.</li>
            </ol>
        </div>

        <script src="../js/index.js"></script>


</body>

</html>