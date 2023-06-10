
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/Auth.css">
</head>
<body>
    <div class="container"> 
        <div class="RegisterForm">  
            <div class="formData">  
                    <form action="UserAuth.php" method="Post"  onsubmit="return validateForm()">  

                    <h1>Register Form</h1>
                            <div class="firstName"> 
                                <label for="firstName">First Name</label> 
                                <br>
                                <input type="text" name="firstName" id="firstName"  maxlength="15" > 
                                <h3 id="NameValid" >Name is Required </h3>
                            </div>   
                            <br>
                            <div class="lastName"> 
                                <label for="lastName">Last Name</label> 
                                <br>
                                <input type="text" name="lastName" id="lastName" > 
                            </div>  
                            <div class="form-gender"> 
                                <input type="radio" name="gender" value="Male" required> 
                                <label>Male</label>
                                <input type="radio"  name="gender" value="Female"> 
                                <label>Female</label>
                            </div>
                            <br>
                            <div class="email"> 
                                <label for="email">Email Address</label> 
                                <br>
                                <input type="email" name="email" id="email" required> 
                            </div>  
                            <br>
                            <div class="PhoneNum"> 
                                <label for="PhoneNum">Phone Number</label> 
                                <br>
                                <input type="tel" name="PhoneNum" id="PhoneNum"> 
                                <h3 id="phoneValid">This Number is Not Valid</h3>
                            </div>  
                            <br>
                            <div class="password"> 
                                <label for="pass">Password</label>
                                <br> 
                                <input type="password" name="password" id="pass" required>
                            </div>   
                            <br>
                           <input name="submitBtn" id="submitBtn" type="submit" value="Register">  

                            <p class="signup">Already have an account? <span><a href="login.php">Sign In</a></span></p>
                        </form>  

                </div> 

        </div>
        <div class="imageSection"> 
          <img src="images/register.jpg" alt=""> 
        </div>


    </div>    


    <script src="auth.js"></script>



</body>
</html>