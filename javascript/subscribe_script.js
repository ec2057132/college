/* Date Setter */
const d = new Date();
let c_month = document.getElementById("ex-month").value = d.getMonth() + 1;
let c_year = document.getElementById("ex-year").value = d.getFullYear();

function changeSubStatus(user) {
  if(verifyInput()) return false;

  var fData = new FormData();

  fData.append("u-id", user);
  fData.append("cardNum", document.getElementById("cardNum").value);
  fData.append("cardName", document.getElementById("cardName").value);
  fData.append("cardCvc", document.getElementById("cardCVC").value);
  fData.append("exMonth", document.getElementById("ex-month").value);
  fData.append("exYear", document.getElementById("ex-year").value);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/subscribe_action.php");
  
  xhr.onload = function(){
    showConfirm();
  };
  xhr.send(fData);
  
  return false;
}

function verifyInput() {
  let errorFound = false

  let cardNum = document.getElementById("cardNum");
  let cardName = document.getElementById("cardName");
  let cardCvc = document.getElementById("cardCVC");
  let exMonth = document.getElementById("ex-month").value;
  let exYear = document.getElementById("ex-year").value;

  cardNum = cardNum.value.trim();
  cardName = cardName.value.trim();
  cardCvc = cardCvc.value.trim();

  //Card Number
  if (cardNum !== "") {
    if (cardNum.length == 16) {
      let temp = cardNum;
      temp = temp.replace(/[^0-9]/gi, '');
      if (temp != cardNum) {
        addError("cardNum", "input", "input-error");
        errorFound = true;
      }
    }
    else {
      addError("cardNum", "input", "input-error");
      errorFound = true;
    }
  }
  else {
    addError("cardNum", "input", "input-error");
    errorFound = true;
  }
  //Name on Card
  if (cardName !== "") {
    if (cardName.length <= 70) {
      let temp = cardName;
      temp = temp.replace(/[^a-z-,\s]/gi, '');
      if (temp != cardName) {
        addError("cardName", "input", "input-error");
        errorFound = true;
      }
    }
    else {
      addError("cardName", "input", "input-error");
      errorFound = true;
    }
  }
  else {
    addError("cardName", "input", "input-error");
    errorFound = true;
  }

  //Card CVC
  if (cardCvc !== "") {
    if (cardCvc.length == 3) {
      let temp = cardCvc;
      temp = temp.replace(/[^0-9]/gi, '');
      if (temp != cardCvc) {
        addError("cardCVC", "input", "input-error");
        errorFound = true;
      }
    }
    else {
      addError("cardCVC", "input", "input-error");
      errorFound = true;
    }
  }
  else {
    addError("cardCVC", "input", "input-error");
    errorFound = true;
  }

  if(exYear <= c_year) {
    if (exMonth <= c_month) {
      dateError();
      errorFound = true;
    }
  }
  
  return errorFound;
}

function addError(id, fClass, attr) {
  document.getElementById(id).setAttribute(attr, "");
  document.querySelectorAll("." + fClass + "[" + attr + "]").forEach(inpEl => {
      inpEl.addEventListener('input', () => inpEl.removeAttribute(attr));
  });
}
function dateError() {
  document.getElementById("ex-month").setAttribute("input-error", "");
  document.getElementById("ex-year").setAttribute("input-error", "");

  document.querySelectorAll(".input-drop[input-error]").forEach(inpEl => {
    for (let i=0; i<2; i++) {
      inpEl.addEventListener('input', () => document.getElementsByClassName("input-drop")[i].removeAttribute("input-error"));
    }
  });
}

function showConfirm() {
  document.getElementById("left-box").style.display = "none";
  document.getElementById("right-box").style.display = "none";

  document.getElementById("confirm-box").style.display = "flex";
}