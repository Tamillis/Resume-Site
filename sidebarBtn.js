function toggleNav() {
    let sidebarDisplay = document.getElementById("sidebar").style.display;

    if (sidebarDisplay == "" || sidebarDisplay == "none") {
      document.getElementsByClassName("section")[0].style.marginLeft = "calc(var(--sidebarWidth) + var(--sectionMargin))";
      document.getElementsByClassName("nav-btn")[0].style.marginLeft = "var(--sidebarWidth)";
      document.getElementById("footer").style.marginLeft = "var(--sidebarWidth)";

      document.getElementsByClassName("sidebar")[0].style.display = "block";
    }
    else {
      document.getElementsByClassName("section")[0].style.marginLeft = "var(--sectionMargin)";
      document.getElementsByClassName("nav-btn")[0].style.marginLeft = "0px";
      document.getElementById("footer").style.marginLeft = "0px";

      document.getElementsByClassName("sidebar")[0].style.display = "none";
    }
  }