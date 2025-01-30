<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" /> -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" /> -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="login/StyleLogin.css" />
    <script src="login/script.js"></script>
    <title>pramWeb</title>
  </head>
  <body>

    <header>
      <!-- <h2 class="De Prambanan Tour"></h2>
      <nav class="navigation">
        <a href="Prambanan2.html">HOME</a> -->
        <!-- <a href="#">LOGIN</a> -->
       
      </nav>
    </header>
    
            <div class="wrapper">
              <!-- <span class="icon-close">
                <ion-icon name="close"></ion-icon>
              </span> -->
              <div class="form-box login">
                <h2>Login</h2>
                <form action="#">
                  <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required />
                    <label for="">Email</label>
                  </div>
                  <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required />
                    <label for="">Password</label>
                  </div> 
                  <!-- <div class="remember-forgot">
                    <label for=""><input type="checkbox" />Remember me</label>
                    <a href="#">Forgot Password</a>
                  </div>  -->
                   <button type="submit" class="btn"><b>Login</b></button>
                  <div class="login-register">
                    <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                  </div>
                </form>
              </div>

              <div class="form-box register">
                <h2>Registration</h2>
                <form action="#">
                  <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" required />
                    <label for="">Username</label>
                  </div>
                  <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required />
                    <label for="">Email</label>
                  </div>
                  <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" required />
                    <label for="">Password</label>
                  </div>
                  <!-- <div class="remember-forgot">
                    <label for=""><input type="checkbox" />I agree to the terms and conditions</label>
                    <a href="#">Forgot Password</a>
                  </div> -->
                  <button type="submit" class="btn"><b>Register</b></button>
                  <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="login/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>
