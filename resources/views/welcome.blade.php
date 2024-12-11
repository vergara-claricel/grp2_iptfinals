<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Page</title>
    <link rel="stylesheet" href="../css/startup.css">
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

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
            <a href="https://www.facebook.com/EPCST"><img src="../img/image.png" alt="" class="nav-icon"></a>
            <a href="{{ route('contact') }}"><img src="../img/su_phone.png" alt="" class="nav-icon"></a>
        </div>
    </div>
    
   
        <div class="container">
            <img src="../img/LOGO-removebg-preview.png" alt="">
            <div class="welcome">
                <h1>30</h1>
            </div>
            <div class="welcome2">
            <h1 class="n1">Years of Nurturing</h1>
                <h2>and</h2>
                <h1 class="n2">Homing Champions</h1>
            </div>
        </div>
    
        <div class="button">
            <a href="{{ route('homepage') }}" class="learnmore">LEARN MORE</a>
        </div>

    
</body>
</html>
