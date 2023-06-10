<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/Auth.css">
</head>
<body>
    <div class="container"> 
        <div class="imageSection"> 
            <img src="images/login.jpg" alt="">
        </div>
        <div class="loginForm">  
 
            <div class="formData">  
                    <form action="UserAuth.php" method="post" onsubmit="return requiredValidation()">  

                    <h1>Login Form</h1>
                            <div class="username"> 
                                <label for="username">Useremail</label> 
                                <br>
                                <input type="Email" name="email" id="username" > 
                                <div id="userNameWarning" style="background-color:red; color:white;"></div>
                            </div> 
                            <br><br>
                            <div class="password"> 
                                <label for="pass">Password</label>
                                <br> 
                                <input type="password" name="password" id="pass">
                                <div id="PassWarning" style="background-color:red; color:white;"></div>
                            </div> 
                            <br><br><br>
                            <input name="submitLogin" id="submitBtn" type="submit" value="Log In"> 
                            <p class="signup">Don't have an account? <span><a href="Register.php">Sign up</a></span></p>

                        </form> 
                </div> 

        </div>



    </div>    

    <script> 
    function requiredValidation(){ 
        var username = document.getElementById("username").value; 
        var password = document.getElementById("pass").value; 
        if(username == "") 
        { 
            document.getElementById("userNameWarning").innerHTML = "This Input is Required"; 
            return false;
        }  
        else if(password == ""){ 
            document.getElementById("PassWarning").innerHTML = "This Input is Required"; 
            return false;
        }
        else{ 
            return true;
        }
    } 
    </script>


</body>
</html>