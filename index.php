<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taskManagementSystem</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <div class="form-box">
         <form id="myForm" method="POST">

          <div id="loginForm" >
            <i class="fa-regular fa-user"></i>

            <input type="text" name="email" placeholder="email" id="email"><br><br>

            <i class="fa-solid fa-key"></i>
            <input type="password" name="password" placeholder="password" id="password"><br><br>

            <!-- Use type="submit" for the login button to submit the form -->
            <input type="submit" id="login-btn" value="LOG IN" onclick="setLoginAction()"><br><br>
            <button type="button" id="account"onclick="toggleForm()">CREATE NEW ACCOUNT</button><br><br>
          </div>

          <div id="signup-form" style="display: none;">

               
            <label for ="email">email:</label>
            <input type="text" id="email" name="email"><br><br>

             <label for="firstname">First Name:</label>
             <input type="text" id="firstname" name="firstname"><br><br>

             <label for="surname">Surname:</label>
             <input type="text" id="surname" name="surname" ><br><br>

             <label for="mobile_number">Mobile Number:</label>
             <input type="tel" id="mobile_number" name="mobile_number" pattern="[0-9]{10}" ><br><br>

             <label for="new_password">New Password:</label>
             <input type="password" id="new_password" name="new_password" ><br><br>

             <label for="date_of_birth">Date of Birth:</label>
             <input type="date" id="date_of_birth" name="date_of_birth" ><br><br>      
                     <button type="submit" id="signup" onclick="setSignUpAction()">SIGN UP</button>
          </div>

         </form>
    </div>
    <script>
        function toggleForm() {
        
            var loginForm = document.getElementById("loginForm");
            var signupForm = document.getElementById("signup-form");

            loginForm.style.display = (loginForm.style.display === "none") ? "block" : "none";
            signupForm.style.display = (signupForm.style.display === "none") ? "block" : "none";
        }

        function setLoginAction() {
            // Set the form action to handle login
            document.getElementById("myForm").action = "login.php";
        }

        function setSignUpAction() {
            // Set the form action to handle sign up
            document.getElementById("myForm").action = "signup.php";
        }
    </script>
   
</body>
</html>
