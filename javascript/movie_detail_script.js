let length = document.getElementById("movie-length").innerHTML;

inHours = length/60;
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
document.getElementById("movie-length").innerHTML = durationSimplified;

const imgs = ["img/star-empty.png", "img/star-filled.png", "img/like-empty.png", "img/like-filled.png", "img/dislike-empty.png", "img/dislike-filled.png"];

let favState = false;
let likeState = false;
let dislikeState = false;

function changeIcon(id) {
  if (id === "favourite-icon") {
    if (!favState) {
      document.getElementById(id).src=imgs[1];
      favState = true;
    }
    else {
      document.getElementById(id).src=imgs[0];
      favState = false;
    }
  }
  else if (id === "like-icon") {
    if (!likeState) {
      document.getElementById(id).src=imgs[3];
      document.getElementById("dislike-icon").src=imgs[4];
      likeState = true;
      dislikeState=false;
    }
    else {
      document.getElementById(id).src=imgs[2];
      document.getElementById("dislike-icon").src=imgs[4];
      likeState = false;
      dislikeState=false;
    }
  }
  else {
    if (!dislikeState) {
      document.getElementById(id).src=imgs[5];
      document.getElementById("like-icon").src=imgs[2];
      dislikeState=true;
      likeState = false;
    }
    else {
      document.getElementById(id).src=imgs[4];
      document.getElementById("like-icon").src=imgs[2];
      dislikeState=false;
      likeState = false;
    }
  }
  
}