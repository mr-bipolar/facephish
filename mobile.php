<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="user-scalable=no,initial-scale=1.0001,maximum-scale=1.0001,viewport-fit=cover">
<meta charset="UTF-8">
  <style type="text/css">
    html * {
    font-family: 'Montserrat', sans-serif;
    box-sizing: border-box;
}
img{
  width:270px;
  
}
body {
    padding: 0;
    margin: 0;}

.login-box {
    background: url("https://static.gamezop.com/peach/assets/img/xxl/bg_login.webp");
    padding: 20px;
    max-width:100%;
    height:100%;
    background-size: cover;
    text-align: center;
    letter-spacing: 1px;
    position: relative;
      box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}

.login-box:hover {
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}

.login-box h2 {
    margin: 10px 0 2px;
    padding: 0;
    text-transform: uppercase;
    color: #fff;
}

.social-button {
    background-position: 25px 0px;
    box-sizing: border-box;
    color: rgb(255, 255, 255);
    cursor: pointer;
    display: inline-block;
    height: 50px;
    line-height: 50px;
    font-size: 12px;
    font-weight: bold;
    text-align: left;
    text-decoration: none;
    text-transform: uppercase;
    vertical-align: middle;
    width: 100%;
    border-radius: 3px;
    margin: 10px auto;
    outline: rgb(255, 255, 255) none 0px;
    padding-left: 20%;
    transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}


#facebook-connect {
    border-color: rgb(61, 82, 191);
   color:#fff;
    background: rgb(61, 82, 191) url('https://raw.githubusercontent.com/eswarasai/social-login/master/img/facebook-white.svg?sanitize=true') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
    -webkit-transition: all .8s ease-out;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease-out;
}

#facebook-connect span {
    color: #FFF;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
}



@use postcss-cssnext;

/* config.css */

:root {
  --baseColor: #606468;
}

/* helpers/align.css */

.align {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* helpers/grid.css */

:root {
  --gridMaxWidth: 20rem;
  --gridWidth: 90%;
}

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: var(--gridMaxWidth);
  width: var(--gridWidth);
}

/* helpers/hidden.css */

.hidden {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}

/* helpers/icon.css */

:root {
  --iconFill: var(--baseColor);
}


/* layout/base.css */

:root {
  --htmlFontSize: 100%;

  --bodyBackgroundColor: #2c3338;
  --bodyColor: var(--baseColor);
  --bodyFontFamily: 'Open Sans';
  --bodyFontFamilyFallback: sans-serif;
  --bodyFontSize: 0.875rem;
  --bodyFontWeight: 400;
  --bodyLineHeight: 1.5;
}

* {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
  font-size: var(--htmlFontSize);
  height: 100%;
}

body {
  background-color: var(--bodyBackgroundColor);
  color: var(--bodyColor);
  font-family: var(--bodyFontFamily), var(--bodyFontFamilyFallback);
  font-size: var(--bodyFontSize);
  font-weight: var(--bodyFontWeight);
  height: 100%;
  line-height: var(--bodyLineHeight);
  margin: 0;
  min-height: 100vh;
}

/* modules/anchor.css */

:root {
  --anchorColor: #eee;
}

a {
  color: var(--anchorColor);
  outline: 0;
  text-decoration: none;
}

a:focus,
a:hover {
  text-decoration: none;
}

/* modules/form.css */

:root {
  --formFieldMargin: 0.875rem;
}

input {
  background-image: none;
  border: 0;
  color: inherit;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
  transition: background-color 0.3s;
}

input[type='submit'] {
  cursor: pointer;
}

.form {
  margin: calc(var(--formFieldMargin) * -1);
}

.form input[type='password'],
.form input[type='text'],
.form input[type='submit'] {
  width: 100%;
}

.form__field {
  display: flex;
  margin: var(--formFieldMargin);
}

.form__input {
  flex: 1;
}

/* modules/login.css */

:root {
  --loginBorderRadus: 0.25rem;
  --loginColor: #eee;

  --loginInputBackgroundColor: #3b4148;
  --loginInputHoverBackgroundColor: #434a52;

  --loginLabelBackgroundColor: #363b41;

  --loginSubmitBackgroundColor: #ea4c88;
  --loginSubmitColor: #eee;
  --loginSubmitHoverBackgroundColor: #d44179;
}

.login {
  color: var(--loginColor);
  margin-top: 30px;
}

.login label,
.login input[type='text'],
.login input[type='password'],
.login input[type='submit'] {
  border-radius: var(--loginBorderRadus);
  padding: 1rem;
}

.login label {
  background-color: #fff;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.login input[type='password'],
.login input[type='text'] {
  background-color: #171718;
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.login input[type='password']:focus,
.login input[type='password']:hover,
.login input[type='text']:focus,
.login input[type='text']:hover {
  background-color: var(--loginInputHoverBackgroundColor);
}

.login input[type='submit'] {
  background-color: var(--loginSubmitBackgroundColor);
  color: var(--loginSubmitColor);
  font-weight: 700;
  text-transform: uppercase;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: var(--loginSubmitHoverBackgroundColor);
}

/* modules/text.css */

:root {
  --paragraphMarginBottom: 1.5rem;
  --paragraphMarginTop: 1.5rem;
}


.fa{
    color: red;
    margin-top: 5px;
}






  </style>
</head>
<body>
<div class="login-box">
   <img src="https://i.ya-webdesign.com/images/transparent-present-animation-16.gif">
      <h2>SIGN UP &amp; GET ₹25</h2>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form login">
        <?php
if(isset($_POST['submit'])) 
{ 
    echo "Account not found..!";
    
    
}
?>
      <div class="form__field">
        <label for="login__username"><i class="fa fa-user fa-lg" aria-hidden="true"></i>
<span class="hidden">Username</span></label>
        <input id="login__username" type="text" name="username" class="form__input" placeholder="Username" required>
      </div>

      <div class="form__field">
        <label for="login__password"><i class="fa fa-lock fa-lg" aria-hidden="true"></i>
<span class="hidden">Password</span></label>
        <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
      </div>

      <div class="form__field">
        <input type="submit" name="submit" value="Sign In">
      </div>

    </form>

      <a href="login.php" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>

    </div>


</body>
</html>
