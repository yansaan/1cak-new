const search_nav = document.querySelector(".search-nav");

search_nav.addEventListener("focus", (event) => {
  $("#search-dropdown").dropdown("show");
  event.target.style.background = "#6b6b6b";
  event.target.style.color = "#ffffff";
});

search_nav.addEventListener("blur", (event) => {
  $("#search-dropdown").dropdown("hide");
  event.target.style.background = "";
});
