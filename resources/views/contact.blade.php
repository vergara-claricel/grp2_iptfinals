<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
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
    

   <h1 class="contactheader">GET IN TOUCH</h1>
   <h3 class="subheader">For more information and for inquiries, here's how you can reach us!</h3>

   <div class="contactarea">
        <div class="inquiry">
            <h3>Inquire now!</h3>
            <div class="contactdetails">
                <div class="contact">
                    <img src="../img/phone.png" class="contacticon" alt="">
                    <span>094238744389</span>
                </div>
                <div class="contact">
                    <img src="../img/email.png" class="contacticon" alt="">
                    <span>epcst@epcst.com</span>
                </div>
            </div>
            <label for="">Name</label>
            <input type="text" placeholder="Name">
            <label for="" >Email</label>
            <input type="text"placeholder="Email">
            <label for="">Message</label>
            <input type="text" id="message" placeholder="Tell us about your concerns..">
            <div class="inquirebtn">
                <a href="{{ route('homepage') }}" id="inquire">Submit</a>
            </div>
        </div>

        <div class="maps">
            <h3>Visit us here:</h3>
            <div class="tabs">
                <a href="" id="b1">Building 1</a>
                <a href="" id="b2">Building 2</a>
            </div>
            <div class="maparea">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5854170360794!2d120.53689310000001!3d14.6794537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339641c0395eb9e9%3A0x7d3d02d68a830230!2sEASTWOODS%20Professional%20College%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sph!4v1733419280330!5m2!1sen!2sph" style="border:0; margin-left:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="700px" height="430px"></iframe>
            </div>
        </div>
   </div>


</body>

<script src="../js/index.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function(){
        document.getElementById('b1').classList.add('active');
    });

document.getElementById('b1').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('map').src =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5854170360794!2d120.53689310000001!3d14.6794537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x339641c0395eb9e9%3A0x7d3d02d68a830230!2sEASTWOODS%20Professional%20College%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sph!4v1733419280330!5m2!1sen!2sph";
    document.getElementById('b1').classList.add('active');
    document.getElementById('b2').classList.remove('active');
});

document.getElementById('b2').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('map').src =
        "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.9181924892592!2d120.52095966947199!3d14.674502699113813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396150056116723%3A0x6342d5da4d5617ec!2sEastwoods%20Professional%20College%20of%20Science%20and%20Technology%20Building%202!5e0!3m2!1sen!2sph!4v1733463952006!5m2!1sen!2sph";
    document.getElementById('b1').classList.remove('active');
    document.getElementById('b2').classList.add('active');
});
</script>
</html>