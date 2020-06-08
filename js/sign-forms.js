document.getElementById('logtext').style.textDecoration = "underline";

function registrationSelect() {
  var signUp = document.getElementById('sign-up');
  var signIn = document.getElementById('sign-in');
  document.title = "FTC Messenger - Registration";
  document.getElementById('regtext').style.textDecoration = "underline";
  document.getElementById('logtext').style.textDecoration = "none";
  setTimeout(reg, 200);
  signIn.style.opacity = "0%";
  signUp.style.opacity = "0%";
  function reg() {
    signUp.style.display = "block";
    signIn.style.display = "none";
    setTimeout(opacity, 200)
    function opacity() {
      signUp.style.opacity = "100%";
    }
  }

}

function loginSelect() {
  var signUp = document.getElementById('sign-up');
  var signIn = document.getElementById('sign-in');
  document.title = "FTC Messenger - Login";
  document.getElementById('regtext').style.textDecoration = "none";
  document.getElementById('logtext').style.textDecoration = "underline";
  setTimeout(log, 200);
  signIn.style.opacity = "0%";
  signUp.style.opacity = "0%";
  function log() {
    signUp.style.display = "none";
    signIn.style.display = "block";
    setTimeout(opacity, 200)
    function opacity() {
      signIn.style.opacity = "100%";
    }
  }
}
