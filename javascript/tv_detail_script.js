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

function changeSeason(tID) {
  var fData = new FormData();
  
  fData.append("t_id", tID);
  fData.append("s_id", document.getElementById("season-select").value);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/movie_season_action.php");
  
  xhr.onload = function(){
    document.getElementById("e-sec").innerHTML = "";
    var result = this.response;
    document.getElementById("e-sec").innerHTML = result;
  };
  xhr.send(fData);

  return false;
}

function linkClicked(link) {
  window.location.href = link;
}