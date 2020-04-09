//Validation functions for login and signup
function validateSignUp() {
  var name = document.forms["signup"]["username"].value;
  if (name.length == 0) {
    alert("Name must be filled out");
    return false;
  }
  var pass = document.forms["signup"]["password"].value;
  if (pass.length == 0){
    alert("Password must be filled out");
    return false;
  }
  var passcon = document.forms["signup"]["passwordConfirmed"].value;
  if (passcon != pass){
    alert("Password entries do not match");
    return false;
  }
  return true;
}

function validateLogIn() {
  var name = document.forms["login"]["username"].value;
  if (name.length == 0) {
    alert("Name must be filled out");
    return false;
  }
  var pass = document.forms["login"]["password"].value;
  if (pass.length == 0){
    alert("Password must be filled out");
    return false;
  }
  return true;
}
