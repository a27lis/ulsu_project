/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("dropdown-content").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
  if (!event.target.matches(".arrow-down")) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains("show")) {
        openDropdown.classList.remove("show");
      }
    }
  }
};

function myFunction1() {
  window.onclick = window.open("http://127.0.0.1:5500/src/index.html");
}

var urls = ["game.html", "grammar.html", "times.html", "speaking.html"];

function openRandomUrl() {
  // Выбираем случайный индекс из массива:
  var i = Math.floor(Math.random() * urls.length);
  // Перенаправляем браузер на выбранный URL:
  window.location = urls[i];
}
