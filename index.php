<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>FTC Messenger - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
  </head>
  <body>
    <main id="main">
      <h1>FTC Messenger</h1>
      <ul class="sign-people">
        <li id="regtext" onclick="registrationSelect()">
          <a href="#" onclick="registrationSelect()">Registration</a>
        </li>
        <li id="logtext" onclick="loginSelect()">
          <a href="#" onclick="loginSelect()">Login</a>
        </li>
      </ul>
      <form name="login" id="sign-in" class="registration-form sign-in">
        <label for="name">Nickname:</label><br>
        <input type="text" name="name" value="" placeholder="Enter your nickname...">
        <label for="password">Password:</label><br>
        <input type="password" name="pass" value="" placeholder="Enter your password...">
        <button type="button" name="button" onclick="">Sign In</button>
        <p>Forgot your password? <a href="#">Reset</a></p>
      </form>
      <form name="registration" id="sign-up" class="registration-form sign-up">
        <label for="name">Nickname:</label><br>
        <input type="text" name="name" value="" placeholder="Enter your nickname...">
        <label for="password">Password:</label><br>
        <input type="password" name="pass" value="" placeholder="Enter your password...">
        <label for="password">Confirm:</label><br>
        <input type="password" name="pass" value="" placeholder="Confirm your password...">
        <button id="button-registration" type="button" name="button" onclick="">Sign Up</button>
      </form>
    </main>
    <footer>
      <p>Fe1ixTheCat on GitHub &copy; All right reserved</p>
    </footer>
    <script src="js/sign-forms.js"></script>
    <script src="js/sign-function.js"></script>
  </body>
</html>


<!--registration
<form class="registration-form" action="" method="post">
  <label for="name">Nickname:</label><br>
  <input type="text" name="name" value="" placeholder="Enter your nickname...">
  <label for="age">Age:</label><br>
  <input type="text" name="age" value="" placeholder="Enter how old are you...">
  <label for="password">Password:</label><br>
  <input type="password" name="pass" value="" placeholder="Enter your password...">
  <label for="password">Confirm:</label><br>
  <input type="password" name="pass" value="" placeholder="Confirm your password...">
  <button type="button" name="button">Sign Up</button>
</form>
-->

<!--login
<form class="registration-form" action="" method="post">
  <label for="name">Nickname:</label><br>
  <input type="text" name="name" value="" placeholder="Enter your nickname...">
  <label for="password">Password:</label><br>
  <input type="password" name="pass" value="" placeholder="Enter your password...">
  <button type="button" name="button">Sign In</button>
  <p>Forgot your password? <a href="#">Reset</a></p>
</form>
-->
