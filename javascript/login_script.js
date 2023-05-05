function sendFormData() {
  if(!verifyInput()) return false;

  let email = document.getElementById("e").value.trim();
  let pwd = document.getElementById("pwd").value.trim();

  if (email === "admin" && pwd === "") {
    window.location.href = "login_admin.php";
  }

  var fData = new FormData();

  fData.append("email", document.getElementById("e").value.trim());
  fData.append("pwd", document.getElementById("pwd").value.trim());

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/login_action.php");

  xhr.onload = function(){
    var result = this.response;

    if (result === "MATCH") {
      window.location.href = "home.php";
    }
    else {
      addError("e", "inputField", "input-error");
      addError("pwd", "inputField", "input-error");
    }
  };
  xhr.send(fData);

  return false;
}

function verifyInput() {
  let errorFound = true;

  let email = document.getElementById("e").value;
  let pwd = document.getElementById("pwd").value;

  email = email.trim();
  pwd = pwd.trim();

  if (email === "admin" && pwd === "") {
    return true;
  }

  //Verify Email
  if (email !== "") {
    if (email.length <= 75) {
      const regex = /\S+@\S+\.\S+/;
      if (!regex.test(email)) {
        addError("e", "inputField", "input-error");
        errorFound = false;
      }
      else {
        let temp = email;
        temp = temp.replace(' ', '');
        if (temp != email) {
          addError("e", "inputField", "input-error");
          errorFound = false;
        }
      }
    }
    else {
      addError("e", "inputField", "input-error");
      errorFound = false;
    }
  }
  else {
    
    addError("e", "inputField", "input-error");
    errorFound = false;
  }

  //Verify Password
  if (pwd !== "") {
    if (pwd.length >= 12) {
      if (pwd.search(/[a-z]/) > -1) {
        if (pwd.search(/[A-Z]/) > -1) {
          if (pwd.search(/[0-9]/) > -1) {
            if (!(pwd.search(/[!@#\$%\^\&*\)\(+=._-]/) > -1)) {
              addError("pwd", "inputField", "input-error");
              errorFound = false;
            }
          }
          else {
            addError("pwd", "inputField", "input-error");
            errorFound = false;
          }
        }
        else {
          addError("pwd", "inputField", "input-error");
          errorFound = false;
        }
      }
      else {
        addError("pwd", "inputField", "input-error");
        errorFound = false;
      }
    }
    else {
      addError("pwd", "inputField", "input-error");
      errorFound = false;
    }
  }
  else {
    addError("pwd", "inputField", "input-error");
    errorFound = false;
  }
  
  return errorFound;
}

function addError(id, fClass, attr) {
  document.getElementById(id).setAttribute(attr, "");
  document.querySelectorAll("." + fClass + "[" + attr + "]").forEach(inpEl => {
    for (let i=0; i<2; i++) {
      inpEl.addEventListener('input', () => document.getElementsByClassName(fClass)[i].removeAttribute(attr));
    }
  });
}
