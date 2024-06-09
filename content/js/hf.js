window.onscroll = function () {
  var initialHeader = document.getElementById("initial-header");
  var stickyHeader = document.getElementById("sticky-header");
  var stickyPoint = initialHeader.offsetHeight;

  if (window.pageYOffset > stickyPoint) {
    stickyHeader.style.top = "0";
  } else {
    stickyHeader.style.top = "-100px";
  }
};
