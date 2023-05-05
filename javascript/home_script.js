// Time Finder
const d = new Date();
let hour = d.getHours();

if (hour >= 0 && hour < 12) {
  document.getElementById("greeting-text").innerHTML = "Good Morning, Louis"
}
else if (hour >= 12 && hour < 18) {
  document.getElementById("greeting-text").innerHTML = "Good Afternoon, Louis"
}
else {
  document.getElementById("greeting-text").innerHTML = "Good Evening, Louis"
}