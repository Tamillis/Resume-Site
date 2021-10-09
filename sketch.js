//currently using var for global variables, probably bad practice. sorry.
var textContent = "This is filler"
var backgroundColour = "#111";

//variables that control the appearance of the text
var framesPerUpdate = 5;
var framesPerBlinkCycle = 42;
var curMsgLen = 0;
var blinkOn = true;
var blinks = 0; //number of blinks since message started
var blinksPerCycle = 6;

//a container for all the text properties, t for text
var t = {
  color: "#008f11",
  size: 42,
  font: "IBM Plex Mono"
}

//the script as a line by line array, as loaded in line by line
var script;
//and the current index of that script
var scriptIndex = 0;

//the current line of the script
var curLine = "Default text";

function preload() {
  t.font = loadFont("assets/IBMPlexMono-Regular.ttf");
  
  //load the text into the file
  //script = $.get("assets/messages.txt", setup(), "text");

  /*
  turns out p5js had a string load function, 
  and I couldn't figure out how to force the program to wait for the HHTPGet to complete, 
  calling setup() in the callback to "refresh" the program didnt do the trick 
  */
  script = loadStrings("assets/messages.txt");
}

function setup() {
  //set p5js canvas to desired canvas element
  let w = min(windowWidth * 0.8, 800);
  let h = max(windowHeight * 0.3, 300);
  createCanvas(w, h).parent("p5js-canvas");

  //set default text properties using global t obj, use push pop elsewhere if necessary
  textSize(t.size);
  textFont(t.font);
  fill(color(t.color));

  //set initial script line to first line in file
  curLine = script[script.length - 1];
}

function draw() {
  background(color(backgroundColour));

  //generate current text content (textContent) based on animation state and current script line
  textContent = getTextContent();

  //dynamic text size, either the default size or 16 characters wide (maybe?)
  let correctedTextSize = min(t.size, width / 16);
  textSize(correctedTextSize);

  //display that text in a wrapped box
  //for ease of editing set a margin variable
  let margin = correctedTextSize / 2;
  text(textContent, margin, margin, width - margin, height - margin)
}

function updateScriptIndex() {
  /*
  this logic may not be intuitive, but the first X lines of the script
  are fixed and should always be displayed in order.
  
  After those X lines the following lines are displayed at random,
  cycling infinitely
  */

  let cutoff = 5;

  //check if the current scriptIndex is above the cutoff
  if(scriptIndex >= cutoff) {
    //assign it a random index up to the script array length
    scriptIndex = floor(random(cutoff, script.length));
  }
  //otherwise increment
  else scriptIndex++;

  //and set the curLine to the line at the new index
  curLine = script[scriptIndex];
}

function getTextContent() {
  let msg = "";

  //let the message equal the slice of the current script line up to the current msg length curMsgLen
  msg = curLine.slice(0, curMsgLen);

  //if there have been enough frames for a message update, 
  //and the current message length isnt longer than the current message line
  if(frameCount % framesPerUpdate == 0 && curMsgLen < curLine.length) curMsgLen++;
  else if (blinks > blinksPerCycle) {
    curMsgLen = 0;
    blinks = 0;
    //update script index
    updateScriptIndex();
  }

  //if there have been enough frames for half a blink cycle
  //(i.e. so that for one cycle, its half on and half off)
  if (frameCount % (framesPerBlinkCycle / 2) == 0) {
    
    if (blinkOn) {
      if(curMsgLen >= curLine.length) blinks++;
      blinkOn = false;
    }
    else blinkOn = true;
  }

  if (blinkOn) msg = msg + String.fromCharCode(0x2588);

  return msg;
}

function windowResized() {
  let w = min(windowWidth * 0.8, 800);
  let h = max(windowHeight * 0.3, 300);
  resizeCanvas(w, h);
}