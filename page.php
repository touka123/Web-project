<html>
    <head>
        <title>Entertainment Hub</title>
        <style>
            body,html{
                margin: 0;
                padding:0;
                background-image:url("https://images.unsplash.com/photo-1519664699825-ddb2c64076bf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80");
            background-size:cover;
         
                
            }
            .hey a{color:red;
            text-decoration: none;
            margin:12px;
            font-family:Impact, Charcoal, sans-serif;
    
            }
            .hey a:hover{
                color:#60b52f;
                font-size:120%;
                
            }
            .hey2
            {
            height:100%;
           
            color:white;
            font-family: "Comic Sans MS", cursive, sans-serif;
            text-align: center;
            z-index:1;}
            .hey3{padding-top:10px;
                color:red;
                float:right;
                border:10px blue inset;
                border-radius:20px;
                position: relative;
                top:-400px;
                font-size:85%;
                font-family:Arial, Helvetica, sans-serif;
                background-image:url("https://images.unsplash.com/photo-1550784671-19b8a313072d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80");
            background-size:cover;}
           .wel{
            position: relative;
            top:50px;
           }
           button{color:blue;
           margin-top:5px;
           margin-bottom: 5px;}
            
             .content{position: relative;
             top:-180px;
             left:80px;
             }
             .content p{
                font-family: 'Boogaloo', cursive;
             }
             .hey3{font-family:"Arial Black", Gadget, sans-serif;
             color:#49291f;
             padding:17px;}
             .hey3 a{
                text-decoration: none;
                color:red;
               font-family:  Impact, Charcoal, sans-serif;
             }
             .hey3 a:hover{font-size:135%;
             }
           .gif2{position:relative;
           top:-290px;
           left:-310px;}
            
            
            
        </style>
        <link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
        
    </head>
    <body>
        <script type=text/javascript> alert("This website is just a collection of original links.We do not promote piracy in any form.Have a nice day!");</script>
        <div class="hey" style="background-color:#091e0f; padding:20px; margin:0;position:fixed;z-index:2; width:100%">
            <a href="#" >Games </a>
            <a href="#">Movies </a>
            <a href="#">Music </a>
            <a href="#">Wallpapers </a>
            <a href="reportbug.html">Report a Bug </a>
            <a href="#">Contact us</a>
            
        </div>
        <div class="hey2" style="position:relative; top:63px; ">
            <div class="wel">
            <h1 style="margin:0;">Welcome to ENTERTAINMENT HUB</h1><br>
            <img src="https://media.tenor.com/images/9b02d8f0596f072a78c9c7df0b7eab87/tenor.gif" height="240" width="210">
            <p style="font-family:Arial, Helvetica, sans-serif; color:#e05098; font-weight:800;font-size:115%;">Endless hours of content!</p>
            </div>'
           
            <div class="hey3">
            <form method="post" action="login.php">
                Email:<input type="text" name="wow" placeholder="Ex:xyz@gmail.com" size="25" value="<?php if(isset($_COOKIE["wow"])){echo $_COOKIE["wow"];} ?>"><br>
                Password:<input type="text" name="fnfd" value="<?php if(isset($_COOKIE["fnfd"])){echo $_COOKIE["fnfd"];} ?>"><br>
                <input type="checkbox" name="remember">Remember me<button type="submit" value="Submit">Dive in!</button><br>
                <span style="color:yellow;">OR</span><br>
                <a href="register.html" target=_blank>Register</a>
            </form>
        </div>
            <div class="gif2">
            <img src="https://media.giphy.com/media/VyqJ0E6oHInAs/giphy.gif" height="200" width="300"></div>
            <p style="font-family:Arial, Helvetica, sans-serif; color:yellow; font-weight:bold;font-size:115%; position:relative; bottom:290px;left:-460px;">Top rated movies!</p>
            <div class="content">
                <p>Entertainment Hub strives to provide a unique collection of movies, games, wallpapers, music for your countless hours of enjoyment. Unlike other websites we aim to bring to your screen a selected catalogue of quality content so that you can rest assured that you won’t feel like you are wasting your time while using this website. There is only high rated stuff in our repository. 
Have a look around and you will be restless. If you encounter any bug please feel free to report us using the link on top. Enjoy! 
</p>
                 
            </div>
        </div>
        <script type=text/javascript>
          
            function CheckInfo{
	
    var pflag = true; //Password flag
    var eflag = true; //Email flag
    var psw_regex = /^[A-Za-z]\w{7,14}$/;
    var email_regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.value.match(email_regex)){
        alert("Email entered is invalid, please check again");
        eflag = false;
        return false;
    }
    if(!psw.value.match(psw_regex))
    {
        alert("Password is invalid. Please enter a password that is 7-16 characters long and should only contain numeric values, alphabets and underscore");
        plag = false;
        return false;
    }
    return true;
}


        </script>
    </body>
</html>
