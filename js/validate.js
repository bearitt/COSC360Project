//Validation functions for login and signup
function validateSignUp() {
  var name = document.forms["signup"]["username"].value;
  if (name.length == 0) {
    alert("Name must be filled out");
    return false;
  }
  var firstName = document.forms["signup"]["firstName"].value;
  if (firstName.length == 0){
    alert("First name must be filled out");
    return false;
  }
  var lastName = document.forms["signup"]["lastName"].value;
  if (lastName.length == 0){
    alert("Last name must be filled out");
    return false;
  }
  var email = document.forms["signup"]["email"].value;
  if (email.length == 0){
    alert("Email must be filled out");
    return false;
  }
  var at = /[a-z,A-Z,0-9,-,_,.,!,#,$,%,&,',*,+,-,/,=,?,^,_,`,{,|,},~][@][a-z,A-Z,0-9][.][a-z,A-Z]/;
  var conseqDots = /[.]{2}/;
  if (!at.test(email) || conseqDots.test(email)){
    alert("Invalid email address");
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
