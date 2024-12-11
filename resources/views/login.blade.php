<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin:0;
            padding: 0;
        }

        body{
            background-image: url('../img/nb-out.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: overlay;
            height:600px;
            font-family: 'Inter';
        }

        body::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            height: 800px;
            background-color: #f5f5f5;
            opacity: 0.8; 
            z-index: -1;
         }

         .parent{
            display: flex;
            flex-direction: column;
            margin-top: 50px;
            gap:20px;
         }

         .logo{
            height: 150px;
            width: 150px;
         }

         .name{
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

         .name h1{
            color: #7cd902;
            font-size: 40px;
         }

         .name h4{
            font-size: 24px;
            color: #006400;
            font-family: 'Ibarra Real Nova', serif;
         }

        .container, .titleheader, .login, .signup{
            display: flex;
            justify-content: center;
        }

        .titleheader{
            margin-top: -30px;
        }


        .login-form-container, .signup-form-container{
            background-color: #DDFFB1;
            padding:2.5rem 4rem;
            width: 300px;
            border-radius: 15px;
           
        }

        .login-form-container h1,  .signup-form-container h1{
            color: #006400;
            font-size: 25px;
            padding-bottom: 15px;
        }
        

        .input-field{
            display: flex;
            flex-direction: column;
            padding-bottom: 20px;
        }

        .input-field label{
            font-size: 12px;
            padding-bottom: 5px;
            margin-left: 15px;
            padding-top: 10px;
        }

        .input-field input{
            width: 250px;
            padding: 10px;
            border-radius: 10px;
            border: none;
            margin-left: 15px;
            
        }
        .buttoncontainer{
            display: flex;
            justify-content: center;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .login-button, .signup-button{
            background-color: #7cd902;
            color: white;
            border:none;
            width: 250px;
            height: 40px;
            /* margin-left: 60px; */
            /* padding: 10px; */
            border-radius: 8px;
        }

        .box-1{
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: #006400;
            color: white;
            width: 280px;
            border-radius: 15px;
        }


        .box-1 h2{
            text-align: center;
            margin-top: -20px;
        }

        .box-1 h3{
            padding-top: 20px;
            padding-bottom: 40px;
            font-size: 15px;
            text-align: center;
            margin-left: 25px;
            margin-right: 25px;
        }

        .button-1, .button-2{
            border-radius: 20px;
            border:1px solid white;
            padding: .5rem 1rem;
            background-color: #006400;
            color: white;
        }

        .button-2{
            display: none;
        }

        .signup-form-container{
            display: none;
        }

        .containerline1, .containerline2{
            background-color: #f1f1f1;
            height:1px;
            width: 260px;
            display: flex;
            justify-self: center;
        }

        .button-1:hover, .button-2:hover{
            background-color: white;
            color: #006400;
        }

        .signup-button:hover, .login-button:hover{
            font-weight: bold;
            font-size: 14px;
            background-color: #69b800;
        }
         

    </style>
</head>
<body>
    <div class="parent">
    <div class="titleheader">
        <img src="../img/logo_plain.png" alt="" class="logo">
        <div class="name">
            <h1>EASTWOODS</h1>
            <h4>Professional College of</h4>
            <h4>Science and Technology</h4>
        </div>
    </div>

    <div class="container">
      
      <!--Forms-->
          <div class="login-form-container">
              <h1>User Login</h1>
              <div class="containerline1"></div>
                <div class="input-field">
                    <label for="username">Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="input-field">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="buttoncontainer">
                    <button class="login-button" type="button">Login</button>
                </div>
                <div class="containerline2"></div>
          </div>



<!--Create Container for Signup form-->
      <div class="signup-form-container">
          <h1>Sign Up Form</h1>
          <div class="containerline1"></div>
          <div class="input-field">
            <label for="">Full Name</label>
            <input type="text" placeholder="Full Name">
          </div>
          <div class="input-field">
            <label for="">Email</label>
            <input type="text" placeholder="Email">          </div>
          <div class="input-field">
            <label for="">Username</label>
            <input type="text" placeholder="Username">          </div>
          <div class="input-field">
          <label for="">Password</label>
          <input type="text" placeholder="Password">
          </div>
         
    
          <div class="buttoncontainer">
            <button class="signup-button" type="button">Sign Up</button>
          </div>
          <div class="containerline2"></div>

      </div>


            <div class="box-1">
                <div class="box1content">
                <h2>Welcome!</h2>
                <h3>Lorem ipsum something something lorem ipsum again.</h3>
                
                <div class="signup">
                <button class="button-1" onclick="signup()">Sign up</button>
                </div>
                <div class="login">
                <button class="button-2" onclick="login()">Login</button>
                </div>
            </div>
        </div>
    </div>
        
    <script src="../js/index.js"></script>
    <script>

        function signup(){
            document.querySelector('.login-form-container').style.cssText = "display: none;";
            document.querySelector(".signup-form-container").style.cssText = "display: block;";
            document.querySelector(".button-1").style.cssText = "display: none";
            document.querySelector(".button-2").style.cssText = "display: block";
        }

        function login(){
            document.querySelector(".signup-form-container").style.cssText = "display: none;";
            document.querySelector(".login-form-container").style.cssText = "display: block;";
            document.querySelector(".button-2").style.cssText = "display: none";
            document.querySelector(".button-1").style.cssText = "display: block";
        }


    </script>
</body>
</html>