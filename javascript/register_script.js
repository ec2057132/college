/* Date Setter */
const d = new Date();
let c_day = document.getElementById("dob-d").value = d.getDate();
let c_month = document.getElementById("dob-m").value = d.getMonth() + 1;
let c_year = document.getElementById("dob-y").value = d.getFullYear();

function hideForm(idOne, idTwo) {
  document.getElementById(idOne).style.display = "none";

  if (idOne === "reg-sec-1") {
    document.getElementById("mid-col").style.width = "550px";
    document.getElementById(idTwo).style.display = "flex";
  }
  else {
    document.getElementById("mid-col").style.width = "450px";
    document.getElementById(idTwo).style.display = "block";
  }
}

function sendFormData() {

  if(validateQuestions()) return false;

  var fData = new FormData();
  
  fData.append("f_name", document.getElementById("fName").value);
  fData.append("s_name", document.getElementById("sName").value);
  fData.append("email", document.getElementById("e").value);
  fData.append("p_num", document.getElementById("pNum").value);
  fData.append("dob_d", document.getElementById("dob-d").value);
  fData.append("dob_m", document.getElementById("dob-m").value);
  fData.append("dob_y", document.getElementById("dob-y").value);
  fData.append("cntry", document.getElementById("country").value);
  fData.append("pwd", document.getElementById("pwd1").value);
  fData.append("sec_q_1", document.getElementById("q1").value);
  fData.append("sec_q_1_a", document.getElementById("qa1").value);
  fData.append("sec_q_2", document.getElementById("q2").value);
  fData.append("sec_q_2_a", document.getElementById("qa2").value);
  fData.append("j_date", d);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/register_action.php");
  
  xhr.onload = function(){
    window.location.href = "index.php";
  };
  xhr.send(fData);

  return false;
}

function verifyInput() {

  let errorFound = true;

  let fName = document.getElementById("fName");
  let sName = document.getElementById("sName");

  let e = document.getElementById("e");
  let pNum = document.getElementById("pNum");

  let dob_sD = document.getElementById("dob-d").value;
  let dob_sM = document.getElementById("dob-m").value;
  let dob_sY = document.getElementById("dob-y").value;

  let pwd1 = document.getElementById("pwd1");
  let pwd2 = document.getElementById("pwd2");

  fName = fName.value.trim();
  sName = sName.value.trim();
  e = e.value.trim();
  pNum = pNum.value.trim();
  
  pwd1 = pwd1.value.trim();
  pwd2 = pwd2.value.trim();

  if (fName !== "") {
    if (fName.length <= 25) {
      let temp = fName;
      temp = temp.replace(/[^a-z-]/gi, '');
      if (temp != fName) {
        addError("fName", "input-top", "input-error");
        errorFound = false;
      }
    }
    else {
      addError("fName", "input-top", "input-error");
      errorFound = false;
    }
  }
  else {
    addError("fName", "input-top", "input-error");
    errorFound = false;
  }

  if (sName !== "") {
    if (sName.length <= 25) {
      let temp = sName;
      temp = temp.replace(/[^a-z-]/gi, '');
      if (temp != sName) {
        addError("sName", "input-top", "input-error");
        errorFound = false;
      }
    }
    else {
      addError("sName", "input-top", "input-error");
      errorFound = false;
    }
  }
  else {
    addError("sName", "input-top", "input-error");
    errorFound = false;
  }

  if (e !== "") {
    if (e.length <= 75) {
      const regex = /\S+@\S+\.\S+/;
      if (!regex.test(e)) {
        addError("e", "input", "input-error");
        errorFound = false;
      }
      else {
        let temp = e;
        temp = temp.replace(' ', '');
        if (temp != e) {
          addError("e", "input", "input-error");
          errorFound = false;
        }
      }
    }
    else {
      addError("e", "input", "input-error");
      errorFound = false;
    }
  }
  else {
    addError("e", "input", "input-error");
    errorFound = false;
  }

  if (pNum !== "") {
    if (pNum.length <= 20) {
      let temp = pNum;
      temp = temp.replace(/[^0-9]/gi, '');
      if (temp != pNum) {
        addError("pNum", "input", "input-error");
        errorFound = false;
      }
    }
    else {
      addError("pNum", "input", "input-error");
      errorFound = false;
    }
  }
  else {
    addError("pNum", "input", "input-error");
    errorFound = false;
  }

  // Date
  let min_year = c_year - 13;
  if (dob_sY <= min_year) { //2010 and Under
    if (dob_sY == min_year) { //2010 Only. Now find the month
      if (dob_sM <= c_month) { //2010 and March or before
        if (dob_sM == c_month) { //2010 and March Only. Now find the day
          if (dob_sD > c_day) { //2010 and March and on or before
            errorFound = false;
            dateError();
          }
        }
      }
      else {
        errorFound = false;
        dateError();
      }
    }
  }
  else {
    errorFound = false;
    dateError();
  }

  if (dob_sM == 2) {
    if (dob_sD > 28) {
      if (dob_sD == 29) {
        if (!((0 == dob_sY % 4) && (0 != dob_sY % 100) || (0 == dob_sY % 400))) {
          errorFound = false;
          dateError();
        }
      }
      else {
        errorFound = false;
        dateError();
      }
    }
  }
  
  switch (dob_sM) {
    case "4":
      if (dayCheck(dob_sD)) errorFound = false;
      break;
    case "6":
      if (dayCheck(dob_sD)) errorFound = false;
      break;
    case "9":
      if (dayCheck(dob_sD)) errorFound = false;
      break;
    case "11":
      if (dayCheck(dob_sD)) errorFound = false;
      break;
  }

  if (pwd1 !== "") {
    if (pwd2 !== "") {
      if (pwd1 === pwd2) {
        if (pwd1.length >= 12) {
          if (pwd1.search(/[a-z]/) > -1) {
            if (pwd1.search(/[A-Z]/) > -1) {
              if (pwd1.search(/[0-9]/) > -1) {
                if (!(pwd1.search(/[!@#\$%\^\&*\)\(+=._-]/) > -1)) {
                  pwdError();
                  errorFound = false;
                }
              }
              else {
                pwdError();
                errorFound = false;
              }
            }
            else {
              pwdError();
              errorFound = false;
            }
          }
          else {
            pwdError();
            errorFound = false;
          }
        }
        else {
          pwdError();
          errorFound = false;
        }
      }
      else {
        pwdError();
        errorFound = false;
      }
    }
    else {
      addError("pwd2", "input", "input-error");
      errorFound = false;
    }
  }
  else {
    if (pwd2 === "") {
      addError("pwd2", "input", "input-error");
    }
    addError("pwd1", "input", "input-error");
    errorFound = false;
  }

  if (errorFound) {
    hideForm('reg-sec-1', 'reg-sec-2');
  }
}

function validateQuestions() {

  errorFound = false;
  
  let qa1 = document.getElementById("qa1");
  let qa2 = document.getElementById("qa2");

  qa1 = qa1.value.trim();
  qa2 = qa2.value.trim();

  if (qa1 !== "") {
    if (qa1.length < 75) {
      let temp = qa1;
      temp = temp.replace(/[^a-z-]/gi, '');
      if (temp != qa1) {
        addError("qa1", "input", "input-error");
        errorFound = true;
      }
    }
  }
  else {
    addError("qa1", "input-q", "input-error");
    errorFound = true;
  }
  if (qa2 !== "") {
    if (qa2.length < 75) {
      let temp = qa2;
      temp = temp.replace(/[^a-z-]/gi, '');
      if (temp != qa2) {
        addError("qa2", "input", "input-error");
        errorFound = true;
      }
    }
    else {
      addError("qa2", "input-q", "input-error");
      errorFound = true;
    }
  }
  else {
    addError("qa2", "input-q", "input-error");
    errorFound = true;
  }

  if (errorFound) {
    return true;
  }
  else {
    return false;
  }
}

function addError(id, fClass, attr) {
  document.getElementById(id).setAttribute(attr, "");
  document.querySelectorAll("." + fClass + "[" + attr + "]").forEach(inpEl => {
      inpEl.addEventListener('input', () => inpEl.removeAttribute(attr));
  });
}
function dateError() {
  document.getElementById("dob-d").setAttribute("input-error", "");
  document.getElementById("dob-m").setAttribute("input-error", "");
  document.getElementById("dob-y").setAttribute("input-error", "");

  document.querySelectorAll(".input-drop[input-error]").forEach(inpEl => {
    for (let i=0; i<3; i++) {
      inpEl.addEventListener('input', () => document.getElementsByClassName("input-drop")[i].removeAttribute("input-error"));
    }
  });
}

function dayCheck(day) {
  if(day == 31) {
    dateError();
    return true;
  }
  else {
    return false;
  }
}

function pwdError() {
  document.getElementById("pwd1").setAttribute("input-error", "");
  document.getElementById("pwd2").setAttribute("input-error", "");
  document.querySelectorAll(".input-half[input-error]").forEach(inpEl => {
    for (let i=2; i<4; i++) {
      inpEl.addEventListener('input', () => document.getElementsByClassName("input-half")[i].removeAttribute("input-error"));
    }
  });
}