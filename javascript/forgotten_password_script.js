function hideForm(idOne, idTwo) {
  document.getElementById(idOne).style.display = "none";
  document.getElementById(idTwo).style.display = "flex";
}

function emailSearch() {
  
  let email = document.getElementById("e").value;

  var fData = new FormData();

  fData.append("e", email);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/fp_email_action.php");
  
  xhr.onload = function(){
    
    var result = this.response;
    var rArray = result.split(":");

    if(rArray[0] === "FOUND") {
      
      document.getElementById("q1-text").innerHTML = selectQuestion(rArray[1]);
      document.getElementById("q2-text").innerHTML = selectQuestion(rArray[2]);
      
      hideForm("form-1", "form-2");
    }
    else {
      document.getElementById("e").setAttribute("input-error", "");
      document.querySelectorAll('.input[input-error]').forEach(inpEl => {
        inpEl.addEventListener('input', () => inpEl.removeAttribute('input-error'));
      });
    }
    
  };
  xhr.send(fData);

  return false;
}

function verifyAnswers() {

  var fData = new FormData();

  let email = document.getElementById("e").value;
  let ans1 = document.getElementById("q1-a").value;
  let ans2 = document.getElementById("q2-a").value;

  fData.append("e", email.trim());
  fData.append("q1a", ans1.trim());
  fData.append("q2a", ans2.trim());
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/fp_question_action.php");

  xhr.onload = function(){
    
    var result = this.response;

    if(result === "MATCH") {
      hideForm('form-2', 'form-3');
    }
    else {
      document.getElementById("q1-a").setAttribute("input-error", "");
      document.getElementById("q2-a").setAttribute("input-error", "");
      document.querySelectorAll('.input[input-error]').forEach(inpEl => {
        for(let i=1; i<3; i++) {
          inpEl.addEventListener('input', () => document.getElementsByClassName("input")[i].removeAttribute('input-error'));
        }
      });
    }
    
  };
  xhr.send(fData);

  return false;
}

function changePassword() {

  let p1 = document.getElementById("np1").value;
  let p2 = document.getElementById("np2").value;

  if (p1 !== "") {
    if (p2 !== "") {
      if (p1 === p2) {
        if (p1.length >= 12) {
          if (p1.search(/[a-z]/) > -1) {
            if (p1.search(/[A-Z]/) > -1) {
              if (p1.search(/[0-9]/) > -1) {
                if (!(p1.search(/[!@#\$%\^\&*\)\(+=._-]/) > -1)) {
                  pwdError();
                  console.log("Special");
                }
                else {
                  var fData = new FormData();
  
                  fData.append("e", document.getElementById("e").value);
                  fData.append("pwd", document.getElementById("np1").value);
                  
                  var xhr = new XMLHttpRequest();
                  xhr.open("POST", "php-background/fp_action.php");
                
                  xhr.onload = function(){
                    
                    var result = this.response;
                
                    if(result === "CHANGE") {
                      window.location.href = "index.php";
                    }
                    else {
                      pwdError();
                    }
                    
                  };
                  xhr.send(fData);
                }
              }
              else {
                pwdError();
                console.log("Number");
              }
            }
            else {
              pwdError();
              console.log("Upper");
            }
          }
          else {
            pwdError();
            console.log("Lower");
          }
        }
        else {
          pwdError();
          console.log("Length");
        }
      }
      else {
        pwdError();
      }
    }
    else {
      addError("pwd2", "input", "input-error");
    }
  }
  else {
    if (pwd2 === "") {
      addError("pwd2", "input", "input-error");
    }
    addError("pwd1", "input", "input-error");
  }
  return false;
}

function selectQuestion(q) {

  switch(q) {
    case '1':
      return "What is your mother's maiden name?";
    case '2':
      return "What is your father's middle name?";
    case '3':
      return "What highschool did you attend?";
    case '4':
      return "What is the name of your favourite pet?";
    case '5':
      return "What was your favourite food as a child?";
    case '6':
      return "What city or town did your parents meet?";
  }
}

function pwdError() {
  document.getElementById("np1").setAttribute("input-error", "");
  document.getElementById("np2").setAttribute("input-error", "");
  document.querySelectorAll('.input[input-error]').forEach(inpEl => {
    for(let i=3; i<5; i++) {
      inpEl.addEventListener('input', () => document.getElementsByClassName("input")[i].removeAttribute('input-error'));
    }
  });
}