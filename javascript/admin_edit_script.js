function editView(id, type) {
  window.location.href = "admin_edit.php?" + type + "=" + id;
}
function linkClicked(link) {
  window.location.href = link;
}

function changeSeason(tID) {
  var fData = new FormData();
  
  fData.append("t_id", tID);
  fData.append("s_id", document.getElementById("season-select").value);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_episode_season_action.php");
  
  xhr.onload = function(){
    document.getElementById("e-sec").innerHTML = "";
    var result = this.response;
    document.getElementById("e-sec").innerHTML = result;
  };
  xhr.send(fData);

  return false;
}

function loadEpisodeDetail(tID, sID, eID) {
  var fData = new FormData();
  
  fData.append("t_id", tID);
  fData.append("s_id", sID);
  fData.append("e_id", eID);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/episode_detail_load_action.php");
  
  xhr.onload = function(){
    document.getElementById("episode-details-sec").innerHTML = "";
    var result = this.response;
    document.getElementById("episode-details-sec").innerHTML = result;

    document.getElementById("save-btn-episode").removeAttribute("onclick");
    document.getElementById("save-btn-episode").setAttribute("onclick", "updateEpisode()");
    document.getElementById("save-btn-episode").innerHTML = "Save Episode Details";
  };
  xhr.send(fData);

  return false;
}

function passwordReset() {
  document.getElementById("password").innerHTML = "NewPassword123!";
}

// Update Messages
function updateTVMessage() {
  var snack = document.getElementById("snackbar-show");

  snack.className = "show";

  setTimeout(function(){ snack.className = snack.className.replace("show", ""); }, 1500);
}
function updateEpisodeMessage() {
  var snack = document.getElementById("snackbar-episode");

  snack.className = "show";

  setTimeout(function(){ snack.className = snack.className.replace("show", ""); }, 1500);
}

// User Info Setting
if (document.getElementById("u-data") !== null) {
  const hiddenData = document.getElementById("u-data").value.split(":");
  
  document.getElementById("country").value = hiddenData[0];
  document.getElementById("dob-d").value = hiddenData[1];
  document.getElementById("dob-m").value = hiddenData[2];
  document.getElementById("dob-y").value = hiddenData[3];
  document.getElementById("q-1").value = hiddenData[4];
  document.getElementById("q-2").value = hiddenData[5];
  document.getElementById("plan").value = hiddenData[6];
  document.getElementById("activity").value = hiddenData[7];

  if (hiddenData[8] != "") {
    document.getElementById("a-id").innerHTML = "ID: " + hiddenData[8];
    document.getElementById("admin-level").value = 1;
  }
  else {
    document.getElementById("a-id").innerHTML = "Not Admin";
    document.getElementById("admin-level").value = 0;
  }
}
// TV Info Setting
if (document.getElementById("tv-data") !== null) {
  const hiddenData = document.getElementById("tv-data").value.split(":");

  document.getElementById("g-1").value = hiddenData[1];
  if(hiddenData[2] != "") {
    document.getElementById("g-2").value = hiddenData[2];
  }
  else {
    document.getElementById("g-2").value = 0;
  }
  if (hiddenData[3] != "") {
    document.getElementById("g-3").value = hiddenData[3];
  }
  else {
    document.getElementById("g-3").value = 0;
  }
  document.getElementById("age-rating").value = hiddenData[0];
}

//Add Functions
function prepGenre() {
  document.getElementById("title-text").innerHTML = "Adding New Genre";
  document.getElementById("genre-btn").style.display = "none";

  document.getElementById("genre-input").value = "";
  document.getElementById("genre-description-input").value = "";

  document.getElementById("save-btn-episode").removeAttribute("onclick");
  document.getElementById("save-btn-episode").setAttribute("onclick", "addGenre()");
  document.getElementById("save-btn-episode").innerHTML = "Add Genre";
}
function addGenre() {
  let title = document.getElementById("genre-input").value;
  title = title.replace("\'", "\'\'");
  let desc = document.getElementById("genre-description-input").value;
  desc = desc.replace("\'", "\'\'");

  var fData = new FormData();
  
  fData.append("g_name", title);
  fData.append("g_description", desc);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_add_genre.php");

  xhr.onload = function(){
    window.location.href = "admin_genre.php";
  };
  xhr.send(fData);
}
function prepMovie() {
  document.getElementById("title-text").innerHTML = "Adding New Movie";
  document.getElementById("movie-btn").style.display = "none";

  document.getElementById("m-title").value = "";
  document.getElementById("m-description").value = "";
  document.getElementById("m-year").value = "";
  document.getElementById("g-1").value = "1";
  document.getElementById("g-2").value = "0";
  document.getElementById("g-3").value = "0";
  document.getElementById("m-duration").value = "";
  document.getElementById("m-thumbnail").value = "";
  document.getElementById("m-trailer").value = "";
  document.getElementById("m-director").value = "";
  document.getElementById("m-actors").value = "";
  document.getElementById("m-age").value = "23";

  document.getElementById("save-btn").removeAttribute("onclick");
  document.getElementById("save-btn").setAttribute("onclick", "addMovie()");
  document.getElementById("save-btn").innerHTML = "Add Movie";
}
function addMovie() {
  let title = document.getElementById("m-title").value;
  title = title.replace("\'", "\'\'");
  let desc = document.getElementById("m-description").value;
  desc = desc.replace("\'", "\'\'");
  
  var fData = new FormData();
  
  fData.append("m_title", title);
  fData.append("m_description", desc);
  fData.append("m_year", document.getElementById("m-year").value);
  fData.append("g_1", document.getElementById("g-1").value);
  fData.append("g_2", document.getElementById("g-2").value);
  fData.append("g_3", document.getElementById("g-3").value);
  fData.append("m_duration", document.getElementById("m-duration").value);
  fData.append("m_thumbnail", document.getElementById("m-thumbnail").value);
  fData.append("m_trailer", document.getElementById("m-trailer").value);
  fData.append("m_director", document.getElementById("m-director").value);
  fData.append("m_actors", document.getElementById("m-actors").value);
  fData.append("m_age", document.getElementById("m-age").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_add_movie.php");

  xhr.onload = function(){
    window.location.href = "admin_movies.php";
  };
  xhr.send(fData);
}
function prepTVShow() {
  document.getElementById("title-text").innerHTML = "Adding New TV Show";
  document.getElementById("tv-btn").style.display = "none";
  document.getElementById("episode-line-1").style.display = "none";
  document.getElementsByClassName("details-sec")[1].style.display = "none";
  document.getElementById("episode-line-2").style.display = "none";
  document.getElementsByClassName("panel-btn-sec")[1].style.display = "none";

  document.getElementById("t-title").value = "";
  document.getElementById("t-description").value = "";
  document.getElementById("t-year").value = "";
  document.getElementById("g-1").value = "1";
  document.getElementById("g-2").value = "0";
  document.getElementById("g-3").value = "0";
  document.getElementById("t-thumbnail").value = "";
  document.getElementById("t-trailer").value = "";
  document.getElementById("t-creator").value = "";
  document.getElementById("t-actors").value = "";
  document.getElementById("age-rating").value = "23";

  document.getElementById("save-btn").removeAttribute("onclick");
  document.getElementById("save-btn").setAttribute("onclick", "addTVShow()");
  document.getElementById("save-btn").innerHTML = "Add TV Show";
}
function addTVShow() {
  let title = document.getElementById("t-title").value;
  title = title.replace("\'", "\'\'");
  let desc = document.getElementById("t-description").value;
  desc = desc.replace("\'", "\'\'");
  
  var fData = new FormData();
  
  fData.append("tv_title", title);
  fData.append("tv_description", desc);
  fData.append("tv_year", document.getElementById("t-year").value);
  fData.append("g_id_1", document.getElementById("g-1").value);
  fData.append("g_id_2", document.getElementById("g-2").value);
  fData.append("g_id_3", document.getElementById("g-3").value);
  fData.append("tv_thumbnail", document.getElementById("t-thumbnail").value);
  fData.append("tv_trailer", document.getElementById("t-trailer").value);
  fData.append("tv_creator", document.getElementById("t-creator").value);
  fData.append("tv_actors", document.getElementById("t-actors").value);
  fData.append("tv_age", document.getElementById("age-rating").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_add_tv.php");

  xhr.onload = function(){
    window.location.href = "admin_tv.php";
  };
  xhr.send(fData);
}
function prepEpisode() {
  document.getElementById("e-title").value = "";
  document.getElementById("e-description").value = "";
  document.getElementById("e-season").value = "";
  document.getElementById("e-number").value = "";
  document.getElementById("e-duration").value = "";

  document.getElementById("save-btn-episode").removeAttribute("onclick");
  document.getElementById("save-btn-episode").setAttribute("onclick", "addEpisode()");
  document.getElementById("save-btn-episode").innerHTML = "Add Episode";
}
function addEpisode() {
  let title = document.getElementById("e-title").value;
  title = title.replace("\'", "\'\'");
  let desc = document.getElementById("e-description").value;
  desc = desc.replace("\'", "\'\'");
  
  var fData = new FormData();
  
  fData.append("tv_id", tId);
  fData.append("s_id", document.getElementById("e-season").value);
  fData.append("e_number", document.getElementById("e-number").value);
  fData.append("e_title", title);
  fData.append("e_description", desc);
  fData.append("e_duration", document.getElementById("e-duration").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_add_episode.php");

  xhr.onload = function(){
    
  };
  xhr.send(fData);
}

//Update Functions
function updateGenre(gId) {
  var fData = new FormData();
  
  fData.append("g_id", gId);
  fData.append("g_name", document.getElementById("genre-input").value);
  fData.append("g_description", document.getElementById("genre-description-input").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_update_genre.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}
function updateMovie(mId) {
  let desc = document.getElementById("m-description").value;
  desc = desc.replace("\'", "\'\'");
  
  var fData = new FormData();
  
  fData.append("m_id", mId);
  fData.append("m_title", document.getElementById("m-title").value);
  fData.append("m_description", desc);
  fData.append("m_year", document.getElementById("m-year").value);
  fData.append("g_1", document.getElementById("g-1").value);
  fData.append("g_2", document.getElementById("g-2").value);
  fData.append("g_3", document.getElementById("g-3").value);
  fData.append("m_duration", document.getElementById("m-duration").value);
  fData.append("m_thumbnail", document.getElementById("m-thumbnail").value);
  fData.append("m_trailer", document.getElementById("m-trailer").value);
  fData.append("m_director", document.getElementById("m-director").value);
  fData.append("m_actors", document.getElementById("m-actors").value);
  fData.append("m_age", document.getElementById("m-age").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_update_movie.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}
function updateUser(uId) {
  var fData = new FormData();
  
  fData.append("u_id", uId);
  fData.append("f_name", document.getElementById("f-name").value);
  fData.append("s_name", document.getElementById("s-name").value);
  fData.append("email", document.getElementById("email").value);
  fData.append("p_num", document.getElementById("p-num").value);
  fData.append("dob_d", document.getElementById("dob-d").value);
  fData.append("dob_m", document.getElementById("dob-m").value);
  fData.append("dob_y", document.getElementById("dob-y").value);
  fData.append("cntry", document.getElementById("country").value);
  fData.append("sec_q_1", document.getElementById("q-1").value);
  fData.append("sec_q_2", document.getElementById("q-2").value);
  fData.append("sub_status", document.getElementById("plan").value);
  fData.append("act_status", document.getElementById("activity").value);
  fData.append("a_id", document.getElementById("admin-level").value);
  
  /*fData.append("pwd", document.getElementById("password").value);
  fData.append("sec_q_1_a", document.getElementById("q-a-1").value);
  fData.append("sec_q_2_a", document.getElementById("q-a-2").value);*/
  
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_update_user.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}
function updateTVShow(tId) {
  let title = document.getElementById("t-title").value;
  title = title.replace("\'", "\'\'");
  let desc = document.getElementById("t-description").value;
  desc = desc.replace("\'", "\'\'");
  
  var fData = new FormData();
  
  fData.append("tv_id", tId);
  fData.append("tv_title", title);
  fData.append("tv_description", desc);
  fData.append("tv_year", document.getElementById("t-year").value);
  fData.append("g_id_1", document.getElementById("g-1").value);
  fData.append("g_id_2", document.getElementById("g-2").value);
  fData.append("g_id_3", document.getElementById("g-3").value);
  fData.append("tv_thumbnail", document.getElementById("t-thumbnail").value);
  fData.append("tv_trailer", document.getElementById("t-trailer").value);
  fData.append("tv_creator", document.getElementById("t-creator").value);
  fData.append("tv_actors", document.getElementById("t-actors").value);
  fData.append("tv_age", document.getElementById("age-rating").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_update_tv.php");

  xhr.onload = function(){
    updateTVMessage();
    document.getElementById("title-text").innerHTML = "Editing TV Show '" + document.getElementById("t-title").value + "'";
  };
  xhr.send(fData);
}
function updateEpisode(tId) {
  let title = document.getElementById("e-title").value;
  title = title.replace("\'", "\'\'");
  let desc = document.getElementById("e-description").value;
  desc = desc.replace("\'", "\'\'");
  
  var fData = new FormData();
  
  fData.append("tv_id", tId);
  fData.append("s_id", document.getElementById("e-season").value);
  fData.append("e_number", document.getElementById("e-number").value);
  fData.append("e_title", title);
  fData.append("e_description", desc);
  fData.append("e_duration", document.getElementById("e-duration").value);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_update_episode.php");

  xhr.onload = function(){
    updateEpisodeMessage();
    let episodeNum = document.getElementById("e-number").value;
    let scrollTitleID = "scroll-ep-"+episodeNum;
    let scrollDurationID = "scroll-ep-time-"+episodeNum;
    document.getElementById(scrollTitleID).innerHTML = document.getElementById("e-title").value;
    document.getElementById(scrollDurationID).innerHTML = document.getElementById("e-duration").value + "m";
  };
  xhr.send(fData);
}

// Delete Functions
function deleteGenre(id) {
  var fData = new FormData();
  
  fData.append("g_id", id);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_delete_genre.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}
function deleteMovie(id) {
  var fData = new FormData();
  
  fData.append("m_id", id);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_delete_movie.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}
function deleteUser(id) {
  var fData = new FormData();
  
  fData.append("u_id", id);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_delete_user.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}
function deleteTVShow(id) {
  var fData = new FormData();
  
  fData.append("tv_id", id);
  
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "php-background/admin_delete_tv.php");

  xhr.onload = function(){
    location.reload();
  };
  xhr.send(fData);
}