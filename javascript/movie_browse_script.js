const times = document.getElementsByClassName("length");
let count = 0;
while (count < times.length) {
  let selectedTime = times[count].innerHTML;
  
  let inHours = selectedTime/60;
  inHours = inHours.toString();

  if (inHours.indexOf(".") != -1) {
    const splitTime = inHours.split(".");
    let hours = splitTime[0];
    
    splitTime[0] = 0;
    minutes = splitTime[0] + "." + splitTime[1];
    minutes = 60 * minutes;
    minutes = Math.round(minutes);
    durationSimplified = hours + "h " + minutes + "m";
  }
  else {
    durationSimplified = inHours + "h " + "0m";
  }
  times[count].innerHTML = durationSimplified;
  count++;
}
