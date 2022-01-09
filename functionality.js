//toggles the sidebar from appearing or disappearing, 
//also moving the underlying elements out of the way
//yes I'm aware I should use getElementByID but I was very new to DOM manipulation at the time and I'll fix it,
//it's just a low priority for now
function toggleNav() {
  let sidebarDisplay = document.getElementById("sidebar").style.display;

  //if the display of the sidebar is nill or none move items sidebar amount to the side
  //and set the display to block, or do the reverse
  if (sidebarDisplay == "" || sidebarDisplay == "none") {

    //media query to ensure shifting only happens on larger screens
    if (!window.matchMedia("(max-width: 600px)").matches) {
      document.getElementsByClassName("section")[0].style.marginLeft = "calc(var(--sidebarWidth) + var(--sectionMargin))";
      document.getElementById("footer").style.margin = "1rem  1rem 1rem calc(var(--sidebarWidth) + 1rem)";

    }
    document.getElementsByClassName("nav-btn")[0].style.marginLeft = "var(--sidebarWidth)";
    document.getElementsByClassName("sidebar")[0].style.display = "block";
    
  }
  else {
    //to cover against fuckery
    //all noted elements get reset  when the sidebar is cleared even if
    //they were never changed in the first place. Reset bias!
    document.getElementsByClassName("sidebar")[0].style.display = "none";
    document.getElementsByClassName("nav-btn")[0].style.marginLeft = "0px";
    document.getElementById("footer").style.margin = "1rem";

    //although saying that we now have greater-than-tablet size as well, in which case the margin needs to be greater than sectionMargin but actually
    //the margin needs to be auto'd in order to centrally align the Section
    if (window.matchMedia("(min-width: 1280px)").matches) {
      document.getElementsByClassName("section")[0].style.margin = "5px auto";
      document.getElementsByClassName("section")[0].style.marginRight = "var(--sectionMargin)";
      
    }
    //else reset
    else {
      document.getElementsByClassName("section")[0].style.marginLeft = "var(--sectionMargin)";
      document.getElementsByClassName("section")[0].style.marginRight = "var(--sectionMargin)";
    }
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
  // iframe.width = 500;
  // iframe.height = 520;
  iframe.className = "frame"

  const parentElement = document.getElementById(divId);
  parentElement.appendChild(iframe);
}

function destroyIframe(divId) {
  const div = document.getElementById(divId);
  while (div.firstChild) {
    div.removeChild(div.firstChild);
  }
}