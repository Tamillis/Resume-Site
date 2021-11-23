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

//function to create an iframe on the click and destroy it otherwise.
//thatll make it load properly right?
function toggleIframe(divId, iframeSrc) {
  const container = document.getElementById(divId);
  if (container.firstElementChild) {
    destroyIframe(divId);
    closeDiv(divId); 
  }else{
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
  // iframe.width = 500;
  // iframe.height = 520;
  iframe.className = "frame"

  const parentElement = document.getElementById(divId);
  parentElement.appendChild(iframe);
}

function destroyIframe(divId) {
  const div = document.getElementById(divId);
  while(div.firstChild) {
    div.removeChild(div.firstChild);
  }
}