//toggles the sidebar from appearing or disappearing, 
//also moving the underlying elements, wrapped in a "not-sidebar" div, out of the way
function toggleNav() {
  let sidebarDisplay = document.getElementById("sidebar").style.display;

  //if the display of the sidebar is nill or none move items sidebar amount to the side
  //and set the display to block, or do the reverse
  if (sidebarDisplay == "" || sidebarDisplay == "none") {
    //media query to ensure shifting only happens on larger screens
    if (window.matchMedia("(min-width: 600px)").matches) {
      document.getElementById("not-sidebar").style.marginLeft = "var(--sidebarWidth)";
    }
    document.getElementById("nav-btn").style.left = "var(--sidebarWidth)";
    document.getElementById("sidebar").style.display = "block";
  }
  else {
    //to cover against fuckery
    //all noted elements get reset  when the sidebar is cleared even if
    //they were never changed in the first place. Reset bias!
    document.getElementById("nav-btn").style.left = "0px";
    document.getElementById("sidebar").style.display = "none";

    document.getElementById("not-sidebar").style.marginLeft = "0px";
  }
}

//function to create an iframe at the specified divID on click or destroy it otherwise.
//thatll make it load properly without lagging everything to buggery
function toggleIframe(divId, iframeSrc) {
  const container = document.getElementById(divId);
  if (container.firstElementChild) {
    destroyIframe(divId);
    closeDiv(divId);
  } else {
    openDiv(divId);
    createIframeInDiv(divId, iframeSrc);
  }
}

//functions for toggling divs between block and none display, and changing the button text to boot
function openDiv(divId) {
  let div = document.getElementById(divId);
  //I've set up the HTML so that the button is the previous sibling
  let btn = document.getElementById(div.previousElementSibling.id);
  div.style.display = "block";
  btn.innerHTML = "Close";
}

function closeDiv(divId) {
  let div = document.getElementById(divId);
  //I've set up the HTML so that the button is the previous sibling
  let btn = document.getElementById(div.previousElementSibling.id);
  div.style.display = "none";
  btn.innerHTML = "Open";
}

function createIframeInDiv(divId, iframeSrc) {
  const iframe = document.createElement("iframe");
  iframe.src = iframeSrc;
  iframe.className = "frame"

  document.getElementById(divId).appendChild(iframe);
}

function destroyIframe(divId) {
  const div = document.getElementById(divId);
  while (div.firstChild) {
    div.removeChild(div.firstChild);
  }
}